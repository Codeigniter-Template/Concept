<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Example extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'E-commerce Dashboard Template ';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/index', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function eproductlist()
    {
        $data['title'] = 'E-commerce Product List Template ';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/e-product-list', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function eproductsingle()
    {
        $data['title'] = 'E-commerce Product Single Template ';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/e-product-single', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function eproductcheck()
    {
        $data['title'] = 'E-commerce Product Checkout Template ';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/e-product-checkout', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function finance()
    {
        $data['title'] = 'Finance Dashboard';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/finance', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function sales()
    {
        $data['title'] = 'Sales Dashboard';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/sales', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function infulencer()
    {
        $data['title'] = 'Infulencer Dashboard';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/infulencer', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function infulencerfinder()
    {
        $data['title'] = 'Infulencer Dashboard Finder';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/infulencer-finder', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function infulencerprofile()
    {
        $data['title'] = 'Infulencer Dashboard Profile';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/dashboard/infulencer-profile', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function cards()
    {
        $data['title'] = 'Cards Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/cards', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function general()
    {
        $data['title'] = 'General Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/general', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function carousel()
    {
        $data['title'] = 'Carousel Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/carousel', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function listgrup()
    {
        $data['title'] = 'List Group Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/listgrup', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function typography()
    {
        $data['title'] = 'Typography Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/typography', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function accordions()
    {
        $data['title'] = 'Accordions Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/accordions', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function tabs()
    {
        $data['title'] = 'Tabs Example';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('example/ui/tabs', $data);
        $this->load->view('_layout/footers', $data);
    }

    public function chartc3()
    {
        $data['title'] = 'Charts C3 Example';


        $this->load->view('example/charts/chart-c3', $data);
    }

    public function chartist()
    {
        $data['title'] = 'Chartist Example';


        $this->load->view('example/charts/chart-chartist', $data);
    }

    public function chartchart()
    {
        $data['title'] = 'Chart Example';


        $this->load->view('example/charts/chart-charts', $data);
    }

    public function chartgauge()
    {
        $data['title'] = 'Chart Gauge Example';


        $this->load->view('example/charts/chart-gauge', $data);
    }

    public function chartsparkline()
    {
        $data['title'] = 'Chart Sparkline Example';


        $this->load->view('example/charts/chart-sparkline', $data);
    }

    public function chartsmoris()
    {
        $data['title'] = 'Chart moris Example';


        $this->load->view('example/charts/chart-morris', $data);
    }
}
