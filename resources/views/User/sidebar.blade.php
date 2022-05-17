<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>

    @auth
    <li class="nav-item">
      <a class="nav-link" href="/showPurchasedBooks">
        <i class="mdi mdi-book-open-page-variant menu-icon"></i>
        <span class="menu-title">Purchased Books</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/showUploadedBooks">
        <i class="mdi mdi-folder-upload menu-icon"></i>
        <span class="menu-title">Uploaded Books</span>
      </a>
    </li>
    @endauth


  </ul>
</nav>