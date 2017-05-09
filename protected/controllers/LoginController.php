<?php

class LoginController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	
	public function actionCheckLogin(){
           
            $email=Yii::app()->request->getPost('email');
            $password=Yii::app()->request->getPost('matKhau');
            $url=Yii::app()->request->getPost('url');
            if($email!=NULL && $password!=NULL &&$url!=NULL){
                $user=User::model()->findByAttributes(array('email' => $email, 'matKhau' => $password,'quyen'=>0));
                if($user!=NULL){
                    echo $url;
                     Yii::app()->session['id']=$user['id_user'];
                }  else {
                    echo 0;    
                }
            }else{
            header('Content-type: application/json');
                     echo CJSON::encode("Err");
                    Yii::app()->end(); 
            }
        }

        public function actionIndex()
	{
            header('Content-type: application/json');
                     echo CJSON::encode("Err");
                    Yii::app()->end(); 
//		$model = new User;
//           if (isset($_POST['User'])) {
//                 $email = $_POST['User']['email']; // lấy dữ liệu email người dùng nhập vào 
//                 $password = $_POST['User']['password']; //lấy dữ liệu password người dùng nhập vào 
//                 $user = User::model()->findByAttributes(array('email' => $email, 'password' => MD5($password),'role'=>0)); // tìm kiếm trong csdl với username và password
//                   if ($user == NULL) {
//                        $this->render('index', array('model' => $model)); // nếu null thì refrehs trnag
//                    }else {
//                        Yii::app()->session['member']=$user['lastname'];
//                         Yii::app()->session['id']=$user['id_user'];
////                        echo "<pre>";
////                        print_r(Yii::app()->session['avatar']);
////                        die();
//                         // $this->redirect("admin/Home"); // nếu đúng chuyển sang trang admin
//                       Yii::app()->request->redirect(Yii::app()->createAbsoluteUrl("/"));
//
//                          }
//             }
//                       $this->render('index', array('model' => $model));
            
	}
          public function  actionLogout(){
             echo Yii::app()->session->destroy();
              Yii::app()->request->redirect(Yii::app()->createAbsoluteUrl("/"));
        }
	
}