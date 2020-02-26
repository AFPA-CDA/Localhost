document.addEventListener('DOMContentLoaded', function () {
  const dropdown = document.querySelectorAll('.dropdown-trigger');
  const tabs = document.querySelectorAll(".tabs");
  const sidenav = document.querySelectorAll('.sidenav');

  M.Dropdown.init(dropdown, {coverTrigger: false});
  M.Tabs.init(tabs);
  M.Sidenav.init(sidenav);
});

