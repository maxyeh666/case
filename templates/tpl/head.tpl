<!-- <h1 class="site-heading text-center text-white d-none d-lg-block">
  <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>
  <span class="site-heading-lower">Business Casual</span>
</h1> -->

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-1 fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php"><{$WEB.web_title}></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <{foreach $mainMenus as $mainMenu}>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<{$mainMenu.url}>" <{if $mainMenu.target == 1}>target="_blank"<{/if}>><{$mainMenu.title}></a>
          </li>
        <{/foreach}>

        <{if $smarty.session.user.kind === 1}>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="user.php">管理後台</a>
        </li>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=logout">登出</a>
        </li>
        <{else if $smarty.session.user.kind === 0}>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=logout">登出</a>
        </li>
        <{else}>
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="index.php?op=login_form">登入</a>
        </li>
        <{/if}>
      </ul>
    </div>
  </div>
</nav>