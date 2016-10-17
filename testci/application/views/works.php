<div id="works">
    <div id="work1">
        <h3>Latest Works</h3>
        <ul>
            <li><span class="sp1">All</span></li>
<!--            <li><span>WEB</span></li>-->
<!--            <li><span>MOBILE</span></li>-->
<!--            <li><span>PHOTOGRAPHY</span></li>-->
<!--            <li><span>DESIGN</span></li>-->
         <?php
         foreach($categories as $category){
           ?>
             <li><a href="#"><?php echo $category ->cate_name;?></a></li>
            <?php
         }
         ?>
        </ul>
    </div>

    <div id="zhaopian">
        <ul>
            <li>
                <div class="zhaopian1">
                    <img src="upload/pi.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                            <div class="p1">photo</div>
                            <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="zhaopian1">
                    <img src="upload/pi1.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                                <div class="p1">photo</div>
                                <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="zhaopian1"><img src="upload/pi2.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                            <div class="p1">photo</div>
                            <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>

            </li>
            <li>
                <div class="zhaopian1"><img src="upload/pi3.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                            <div class="p1">photo</div>
                            <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>

            </li>
            <li>
                <div class="zhaopian1"><img src="upload/pi4.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                            <div class="p1">photo</div>
                            <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>

            </li>
            <li>
                <div class="zhaopian1"><img src="upload/pi5.jpg" alt="">
                    <div class="zhaopian2">
                        <div class="zhaopian3">
                            <div class="p1">photo</div>
                            <div class="p2">view photo</div>
                        </div>
                    </div>
                </div>

            </li>
        </ul>

    </div>

</div>