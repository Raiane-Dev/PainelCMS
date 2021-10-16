<section class="home">
    <div class="home">
        <div>
            <main>
                <div class="container boxes">
                    <div>
                    <h3>Hello <span class="underline"><i>Usuário!</i></span></h3>
                    <h6>Get professional planning services</h6>
                    <span>Upgrade to managent planning</span>
                    <button><i data-feather="crosshair"></i> Upgrade Plan</button>
                    </div>
                    <div>
                    <figure><img src="<?php echo INCLUDE_PATH ?>imagens/user.png" /></figure>
                    </div>
                </div><!--container boxes-->

                <div class="container-half">
                    <div class="container">
                        <h4>Today Task</h4>
                        <ul>
                            <?php
                                $templates = MySql::conectar()->prepare("SELECT * FROM `paginas`");
                                $templates->execute();
                                $templates = $templates->fetchAll();
                                foreach($templates as $key => $value){
                            ?>
                            <li>
                                <div>
                                <p><?php echo $value['slug'] ?> </p>
                                <span><?php echo $value['template'] ?></span>
                                </div>
                                <div>
                                    <span class="icon"><i data-feather="check"></i></span>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div><!--container-->


                    <div class="container">
                        <h4>Today Task</h4>
                        <ul>
                            <li>
                                <div>
                                <p>Design Homepage</p>
                                <span>Thu, August 23</span>
                                </div>
                                <div>
                                    <span class="icon"><i data-feather="check"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div><!--container-->
                </div><!--container-half-->
            </main>
        </div>
    </div><!--home-->
</section>