
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>
<div class="login" method='get' novalidate=''>

                    <p class="login__title">Đăng nhập<br><span class="login-edition">Chào mừng bạn đến với Movie</span></p>
                    
                    <div class="social social--colored">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                    </div>

                    <p class="login__tracker">or</p>
                    
                    <div class="field-wrap">
                    <?php echo $form->textField($model,'username',array("class"=>"login__input","placeholder"=>"Tên đăng nhập")); ?>
                    <?php echo $form->passwordField($model,'password',array("class"=>"login__input","placeholder"=>"Password")); ?>
                    </div>
                    
                    <div class="login__control">
                        <?php echo CHtml::submitButton('Đăng nhập'); ?>
                        
                    </div>
                    
                    <?php $this->endWidget(); ?>
                </form>
                </div>