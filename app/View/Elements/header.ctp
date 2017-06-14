<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'top'))?>">Wellcome Shop PIZZA !!!</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'top'))?>">PIZZA</a></li>
      <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">ODER</a></li>
      <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">ODER</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
  </div>
</nav>