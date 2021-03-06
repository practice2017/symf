<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface

{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('Кинематика. Введение');
        $blog1->setBlog('Предмет механики.Механикой называют раздел физики, посвященный изучению закономерностей простейшей формы движения материи - механического движения. Механика состоит из трех подразделов: кинематики, динамики и статики. Кинематика изучает движение тел без учета причин, его вызывающих. Она оперирует такими величинами как перемещение, пройденный путь, время, скорость движения и ускорение. Динамика исследует законы и причины, вызывающие движение тел, т.е. изучает движение материальных тел под действием приложенных к ним сил. К кинематическим величинам добавляются величины - сила и масса. В статике исследуют условия равновесия системы тел. Статика излагается в специальных разделах механики и здесь отдельно рассматриваться не будет. Система отсчета. Под системой отсчета понимается совокупность системы координат и часов. Понятие системы отсчета, включает в себя пространственно-временную характеристику положения тела, при этом пространственная характеристика дается с помощью координат, а временная – с помощью часов. Механическим движением называется изменение взаимного расположения тел относительно друг друга в пространстве с течением времени. Любое механическое движение относительно. Материальной точкой называется такое тело, размерами и формой которого можно пренебречь в сравнении с размерами других тел или расстояниями до них в условиях данной задачи.');
        $blog1->setImage('1.jpg');
        $blog1->setAuthor('dsyph3r');
        $blog1->setTags('Кинематика, механика, физика, система отчета');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);


        $blog2 = new Blog();
        $blog2->setTitle('Кинематика. Введение');
        $blog2->setBlog('Предмет механики.Механикой называют раздел физики, посвященный изучению закономерностей простейшей формы движения материи - механического движения. Механика состоит из трех подразделов: кинематики, динамики и статики. Кинематика изучает движение тел без учета причин, его вызывающих. Она оперирует такими величинами как перемещение, пройденный путь, время, скорость движения и ускорение. Динамика исследует законы и причины, вызывающие движение тел, т.е. изучает движение материальных тел под действием приложенных к ним сил. К кинематическим величинам добавляются величины - сила и масса. В статике исследуют условия равновесия системы тел. Статика излагается в специальных разделах механики и здесь отдельно рассматриваться не будет. Система отсчета. Под системой отсчета понимается совокупность системы координат и часов. Понятие системы отсчета, включает в себя пространственно-временную характеристику положения тела, при этом пространственная характеристика дается с помощью координат, а временная – с помощью часов. Механическим движением называется изменение взаимного расположения тел относительно друг друга в пространстве с течением времени. Любое механическое движение относительно. Материальной точкой называется такое тело, размерами и формой которого можно пренебречь в сравнении с размерами других тел или расстояниями до них в условиях данной задачи.');
        $blog2->setImage('1.jpg');
        $blog2->setAuthor('dsyph3r');
        $blog2->setTags('Кинематика, механика, физика, система отчета');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $manager->flush();

        $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
    }

    public function getOrder()
    {
        return 1;
    }
}