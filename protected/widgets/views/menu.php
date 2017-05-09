 <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/gioithieu">Giới thiệu</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/lichchieu">Lịch chiếu</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/phim">Phim</a>
                            <ul>
                                <?php 
                                    foreach ($data as $row) {
                                    ?>
                                    <li class="menu__nav-item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/phim/listPhim/<?php echo $row->id_theloai?>"><?php echo $row->tenLoad?></a></li>
                                    <?php
                                    }
                                ?>
                                
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/tintuc">Tin tức</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/giave">Giá vé</a>
                            
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/hoidap">Hỏi đáp</a>
                        </li>
                         <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/thanhvien">Thành viên</a>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Đăng nhập</a>
                        </li>

                    </ul>
                    </nav>