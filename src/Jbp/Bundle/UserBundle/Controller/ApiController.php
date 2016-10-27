<?php

namespace Jbp\Bundle\UserBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{

//                          数据库操作
//    /**
//     * 查询
//     */
//    public function selectAction(Request $request)
//    {
//        $test = $this->getDoctrine()->getRepository('AppBundle:Test')->find(2);
//        if (!$test) {
//            throw $this->createNotFoundException(
//                '记录不存在 '
//            );
//        }
//        echo '<pre>';var_dump($test);exit;
//    }
//
//
//    /**
//     * 修改
//     */
//    public function updateAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $test = $this->getDoctrine()->getRepository('AppBundle:Test')->find(1);
//        if (!$test) {
//            throw $this->createNotFoundException(
//                '记录不存在 '
//            );
//        }
//        $test->setName('测试记录'.rand(1,100));
//        $em->flush();
//        echo '<pre>';var_dump($test);exit;
//    }
//
//
//    /**
//     * 增加
//     */
//    public function addAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $test = new Test();
//        $test->setName('测试记录'.rand(1,100));
//        $test->setPrice(10);
//        $test->setMemo(serialize(['goods'=>1111]));
//        $em->persist($test);
//        $em->flush();
//        echo '<pre>';var_dump($test);exit;
//    }
//
//
//    /**
//     * 删除
//     */
//    public function deleteAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $test = $this->getDoctrine()->getRepository('AppBundle:Test')->find(1);
//        $em->remove($test);
//        $em->flush();
//        echo '<pre>';var_dump($test);exit;
//    }
}
