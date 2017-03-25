<ul data-type="navbar" class="sf-menu">
    <li class="<?php echo $this->action == "homepage" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'homepage')); ?>">Home</a>
    </li>

    <li class="<?php echo $this->action == "services" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'services')); ?>">Services</a>
    </li>

    <li class="<?php echo $this->action == "partners" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'partners')); ?>">Our partners</a>
    </li>

    <li class="<?php echo $this->action == "career" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'career')); ?>">Career</a>
    </li>

    <li class="<?php echo $this->action == "contact" ? "active" : ""; ?>">
        <a href="<?php echo Router::url(array('controller' => 'Pages', 'action' => 'contact')); ?>">Contact us</a>
    </li>
</ul>
