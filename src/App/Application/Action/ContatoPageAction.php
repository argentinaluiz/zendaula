<?php

namespace App\Application\Action;

use App\Domain\Entity\Customer;
use App\Domain\Persistence\RepositoryInterface;
use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Plates\PlatesRenderer;
use Zend\Expressive\Twig\TwigRenderer;
use Zend\Expressive\ZendView\ZendViewRenderer;
use Zend\Stratigility\MiddlewareInterface;

class ContatoPageAction
{
    private $template;

    /**
     * @var EntityManager
     */
    private $manager;
    /**
     * @var CustomerRepositoryInterface
     */
    private $repository;


    public function __construct(CustomerRepositoryInterface $repository, Template\TemplateRendererInterface $template = null)
    {
        $this->template = $template;
        $this->repository = $repository;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $customer = new Customer();
        $customer
            ->setName('Jorge Pereira')
            ->setEmail('jorge_pereira_2@yahoo.com.br');

        $this->RepositoryInterface->create($customer);

        $data           = [];
        $data['data']   = 'Custumer criado com sucesso...';

        return new HtmlResponse($this->template->render("app::contato", $data));
    }
}



