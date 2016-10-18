<?php
    // Start php session.
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check what function to use.
    if(isset($_REQUEST['action'])) {
        if($_REQUEST['action'] == 'get') { // If GET
            echo getCart();
            die;
        } else if($_REQUEST['action'] == 'add') { // If ADD
            $data = array(
                        'fileupload' => $_FILES,
                        'data' => json_decode($_REQUEST['data'], true),
                    );
            echo addCart($data);
            die;
        } else if($_REQUEST['action'] == 'del') { // If REMOVE
            echo removeCart($_REQUEST['index']);
            die;
        }
    }

    // Get all order inside the cart.
    function getCart() {
        // Check if session exists.
        if(isset($_SESSION['order_cart'])) {
            return json_encode(array('status'=>true, 'data'=>$_SESSION['order_cart']));
        }
        return json_encode(array('status'=>false, 'data'=>array()));
    }

    // Insert new order to cart.
    function addCart($data=null) {
        if(!is_null($data) || !is_array($data)) {
        $a = $_SESSION['order_cart'];
            $cart = (isset($_SESSION['order_cart'])) ? $_SESSION['order_cart'] : array();
            $cart[] = $data;
            $_SESSION['order_cart'] = $cart;
            return json_encode(array('status'=>true, 'message'=>'Order successfully added to cart.'));
        }
        return json_encode(array('status'=>false, 'message'=>'An error occurred.'));
    }

    // Clear all orders at cart.
    function clearCart() {
        if(isset($_SESSION['order_cart'])) {
            unset($_SESSION['order_cart']);
            session_destroy();
            return json_encode(array('status'=>true, 'message'=>'Cart successfully cleared.'));
        }
        return json_encode(array('status'=>false, 'message'=>'An error occurred.'));
    }

    // Remove specific order at cart.
    function removeCart($id) {
        if(isset($_SESSION['order_cart'])) {
            unset($_SESSION['order_cart'][$id]);
            return json_encode(array('status'=>true, 'message'=>'Cart successfully cleared.'));
        }
        return json_encode(array('status'=>false, 'message'=>'An error occurred.'));
    }

    // if( !isset( $_SESSION['order_cart'] ) || time() - $_SESSION['order_time'] > 60) {
    // // Expired
    //   echo "-1";
    //   session_destroy();
    // } else {
    // // Not expired
    //   echo "1";
    // }

?>
