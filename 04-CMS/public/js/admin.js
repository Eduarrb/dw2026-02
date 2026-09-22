const adminMenuButton = document.querySelector('.admin__principal__topbar--menu');
const adminSidebar = document.querySelector('.admin__sidebar');

if (adminMenuButton && adminSidebar) {
    adminMenuButton.addEventListener('click', () => {
        adminSidebar.classList.toggle('active');
        adminMenuButton.setAttribute('aria-expanded', String(adminSidebar.classList.contains('active')));
    });
}
