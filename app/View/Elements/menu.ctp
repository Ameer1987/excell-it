<ul data-type="navbar" class="sf-menu">
    <li class="<?php echo $this->action == "homepage" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'homepage')); ?>">Home</a>
    </li>

    <li class="<?php echo $this->action == "about" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'about')); ?>">About</a>
        <!--                                    <ul>
                                                <li><a href="#">Lorem ipsum dolor</a></li>
                                                <li><a href="#">Conse ctetur adipisicing</a></li>
                                                <li><a href="#">Elit sed do eiusmod
                                                        <ul>
                                                            <li><a href="#">Lorem ipsum</a></li>
                                                            <li><a href="#">Conse adipisicing</a></li>
                                                            <li><a href="#">Sit amet dolore</a></li>
                                                        </ul></a></li>
                                                <li><a href="#">Incididunt ut labore</a></li>
                                                <li><a href="#">Et dolore magna</a></li>
                                                <li><a href="#">Ut enim ad minim</a></li>
                                            </ul>-->
    </li>

    <li class="<?php echo $this->action == "services" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'services')); ?>">Services</a>
    </li>

    <li class="<?php echo $this->action == "career" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'career')); ?>">Career</a>
    </li>

    <li class="<?php echo $this->action == "contact" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'contact')); ?>">Contacts</a>
    </li>
</ul>
