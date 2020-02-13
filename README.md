# Concept Bootstrap 4 Admin Dashboard Template

**Concept** is a responsive Bootstrap 4 admin template. It provides you with a collection of ready to use code snippets and utilities, custom pages, loads of charts, 4 different dashboard variations, a collection of applications and some useful widgets.

-------------------

# Preview

### Screenshot

![Concept admin dashboard template preview](https://colorlib.com/wp/wp-content/uploads/sites/2/concept-free-admin-dashboard-panel.jpg)

## Table of contents

- [Link Concept](https://github.com/puikinsh/concept)
- [Link Concept Colorlib](https://colorlib.com/polygon/concept)
- [Installation](#installation)
- [Usage](#usage)
- [Tips](#tips)
- [License](#License)

## Installation 

**Here is how :** 

- Fork the repository
- Clone with ```git clone https://github.com/Codeigniter-Template/concept.git```
- Or Download zip

## Usage 

- Create a new Controller at `view/views` then put like this:
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

<!-- Your Content -->

</div>
```

- Create a new Controller at `application/controllers` then put like this:
```
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('_layout/footer');
    }
}
``` 
## Tips
You Need Modification Js Script Because Its very Strange JS With 8 Dashboard Optional Choose One and Enjoy 


### License

Concept is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of this template.



