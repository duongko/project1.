
<?php

$idsp=$_REQUEST['idsp'];


?>
<div id="comment" class="row" style="margin-top: 50px;">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3>Bình luận sản phẩm</h3>
                        <form action="index.php?act=binhluan" method="post">
                            <div class="form-group">
                                <label>Tên:</label>
                                <input name="comm_name" required type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input name="comm_mail" required type="email" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label>Nội dung:</label>
                                <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                            </div>
                            <input name="idsp" type="hidden" class="form-control" value="<?=$idsp?>">
                            <button type="submit" name="guibinhluan" class="btn btn-primary" value="gửi">Gửi</button>
                        </form>
                    </div>
                </div>
                
                <!--	End Comment	-->

                <!--	Comments List	-->
                <div id="comments-list" class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <?php 
             
                        $comment=loadall_binhluan($idsp);

                        
                        foreach($comment as $bl) {
                            extract($bl);
                  
                        echo'
                        
                   
                        <div class="comment-item">
                        
                            
                            <ul>
                                <li><b>'.$comm_name.'</b></li>
                                <li>'.$comm_date.'</li>
                                <li>
                                    <p>'.$comm_details.'</p>
                                </li>
                            </ul>
                        </div>
                       ' ;


                       }?>
                    </div>
                </div>
                <!--	End Comments List	-->

