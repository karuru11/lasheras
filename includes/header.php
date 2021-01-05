<div class="nav-bar" id="TopNav">
  <header>
    <nav class="site-navigation">
      <ul>
        <div class="shadowLi">
          <a href="index">
          <img src="img/lasheras.svg" alt="" class="logoBox"> 
          </a>
        </div>

        <div class="divLi">
          <li class="top"><a id="headerTools" class="link-pricing" href="index.php">Inicio</a></li>
          <li><a id="headerPricing" class="link-pricing" href="empresa.php">Empresa</a></li>
          <li><a id="headerSupportLnk" class="link-pricing" href="servicios.php">Servicios</a></li>
          <li><a id="headerPricing" class="link-pricing" href="clientes.php">Clientes</a></li>
          <li><a id="headerSupportLnk" class="link-pricing" href="contacto.php">Contacto</a></li>
        </div>
      </ul>

      <div class="spinner-master2 responsive-menu-toggler">
        <input type="checkbox" id="spinner-form2" onclick="enableResponsive()" />
        <label for="spinner-form2" class="spinner-spin2">
          <div class="spinner2 diagonal part-1"></div>
          <div class="spinner2 horizontal"></div>
          <div class="spinner2 diagonal part-2"></div>
        </label>
      </div>  

    </nav>
  </header>
</div>
<script>
    // Get the button, and when the user clicks on it, execute myFunction
document.getElementById("btn-expand").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("expand-learning").classList.toggle("show-learning-items");
  document.getElementById("btn-expand").classList.toggle("rotate-icon");
}
</script>