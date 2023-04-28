<nav class="navbar navbar-default navbar-color ">
  <div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="home.php">
            <i class="glyphicon glyphicon-home"></i>
            <span>Panel de control</span>
          </a>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-th-list"></i>
            <span>Ventas</span>
            </a>
            <ul class="nav submenu">
              <li><a href="sales.php">Administrar ventas</a> </li>
              <li><a href="add_sale.php">Agregar venta</a> </li>
          </ul>
        </li>
        <li>
          <a href="#" class="submenu-toggle">
            <i class="glyphicon glyphicon-signal"></i>
            <span>Reporte de ventas</span>
            </a>
            <ul class="nav submenu">
              <li><a href="sales_report.php">Ventas por fecha </a></li>
              <li><a href="monthly_sales.php">Ventas mensuales</a></li>
              <li><a href="daily_sales.php">Ventas diarias</a> </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>