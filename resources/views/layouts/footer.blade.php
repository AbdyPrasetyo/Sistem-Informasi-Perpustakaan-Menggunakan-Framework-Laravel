

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by R.A.P 19330017
        </div>

    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ url('../assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ url('../assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ url('../assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ url('../assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ url('../assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ url('../assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ url('../assets') }}/js/main.js"></script>


<!-- Page JS -->
<script src="{{ url('../assets') }}/js/dashboards-analytics.js"></script>

<!-- DataTable JS -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js">
</script>

{{-- biasa --}}

<script src="{{ url('../assets') }}/vendor/select2/dist/js/select2.min.js"></script>

{{-- biasa --}}

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    // $(document).ready(function () {
    //     let url = window.location;
    //     const allLinks = document.querySelectorAll('.menu-item a');
    //     const currentLink = [...allLinks].filter(e => {
    //         return e.href == url;
    //     });

    //     if (currentLink.length > 0) { // Filter link yang tidak ada form menu tapi dengan link yang sama
    //         currentLink[0].classList.add("active");

    //         //currentLink[0].closest(".has-treeview").classList.add("active");
    //     }
    //         var url2 = window.location;
    //         const allLinks2 = document.querySelectorAll('.menu-item.menu-item-submenu a');
    //         const currentLink2= [...allLinks2].filter(e => {
    //             return e.href == url2;
    //         });

    //         if (currentLink2.length > 0) { // Filter link yang tidak ada form menu tapi dengan link yang sama
    //             currentLink2[0].closest(".menu-item-submenu").classList.add("menu-item-open");
    //             currentLink2[0].classList.add("active");
    //             currentLink2[0].closest(".menu-sub").style.display = "block";
    //         }

    //     $('.select2-single').select2();
    // }

    // );
</script>

@stack('js')
</body>

</html>
