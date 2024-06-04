<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    // private static array $products = [
    //     [
    //       'id' => 1,
    //       'name' => 'Iphone 13',
    //       'price' => 999.99,
    //       'description' => 'Apple iPhone 13 Pro 256 Go Bleu Pacifique',
    //       'category' => 'smartphone',
    //     ],
    //     [
    //       'id' => 2,
    //       'name' => 'Samsung Galaxy S21',
    //       'price' => 899.99,
    //       'description' => 'Samsung Galaxy S21 5G 128 Go Double SIM Noir Phantom',
    //       'category' => 'smartphone',
    //     ],
    //     [
    //       'id' => 3,
    //       'name' => 'Huawei P40',
    //       'price' => 799.99,
    //       'description' => 'Huawei P40 Pro 5G 256 Go Double SIM Noir',
    //       'category' => 'smartphone',
    //     ],
    //     [
    //       'id' => 4,
    //       'name' => 'MacBook Pro',
    //       'price' => 1299.99,
    //       'description' => 'Apple MacBook Pro 13" 256 Go SSD 8 Go RAM Intel Core i5 quadricœur à 1,4 GHz Argent',
    //       'category' => 'laptop',
    //     ]
    // ];

    // #[Route('/products', name: 'app_products')]
    // ublic function index(): Response
    // {p
    //     return $this->json(self::$products);
    // }
    #[Route('/products', name: 'products')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('products/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/product/{id}', name: 'product')]
    public function show(Product $product): Response
    {
        return $this->render('products/show.html.twig', [
            'product' => $product,
        ]);
    }
}
