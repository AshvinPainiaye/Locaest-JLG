<?php

namespace LocaestJLG\Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use LocaestJLG\Bundle\Entity\Contact;
use LocaestJLG\Bundle\Form\ContactType;


class ContactController extends Controller
{

  /**
  *
  * @Route("/contact", name="page_contact")
  * @Method({"GET", "POST"})
  */
  public function newAction(Request $request)
  {
    $contact = new Contact();
    $form = $this->createForm('LocaestJLG\Bundle\Form\ContactType', $contact);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

      $message = \Swift_Message::newInstance()
      ->setSubject($form->get('sujet')->getData())
      ->setFrom($form->get('email')->getData())
      ->setTo($this->container->getParameter('contact_email'))
      ->setBody($this->renderView(
      'contact/email.html.twig',
      array('contact' => $contact)
    ),
    'text/html'
  );

  $this->get('mailer')->send($message);

  // $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

  // Redirect - This is important to prevent users re-posting
  // the form if they refresh the page
  return $this->redirect($this->generateUrl('page_contact'));


  // $em = $this->getDoctrine()->getManager();
  // $em->persist($contact);
  // $em->flush();
  //
  //
  //
  // return $this->redirectToRoute('page_contact');
}

return $this->render('LocaestJLGBundle:Default:contact.html.twig', array(
  'contact' => $contact,
  'form' => $form->createView(),
));
}

}
