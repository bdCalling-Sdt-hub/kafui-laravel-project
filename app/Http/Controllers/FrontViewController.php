<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    public function Home()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function service()
    {
           // Array containing the data objects
     $data = [
        [
            "id" => 0,
            "image"=>"public/assets/images/services/1.jpg",
            "title" => "Solar System Design <br />and Installation
            ",
            "text" => "We design and install various types of solar systems ranging from hybrid and grid-tied systems to microgrids. This involves gathering all requirements during a site survey, and engaging with clients on which type of system will best suit their needs. We apply Load Analysis techniques and Energy Forecasting to come up with the final design for our clients.
            "
        ],
        [
            "id" => 1,
            "image"=>"public/assets/images/services/2.jpg",
            "title" => "Load Analysis and <br /> Power Quality Audits",
            "text" => "We use of Energy data loggers and power quality analyzers to provide Load Analysis Reports, Power Quality Audits and to measure the total energy requirements at a facility. This feeds into our analysis and design of systems. We do this for new sites or an existing facility. This results in the correct sizing of Inverters, battery banks, solar panel arrays, switch panels, AVRs and power factor correction (PFC) banks.
            "
        ],
        [
            "id" => 2,
            "title" => "Energy <br /> Forecasting",
            "image"=>"public/assets/images/services/3.jpg",
            "text" => " We provide short-term and long-term load forecasting, taking into consideration the current price of electricity from the grid and the price of electricity based on renewable energy sources.

            We also provide reports on estimated CO2 savings (carbon emissions savings), which help in the decision-making process. These forecasts are the basis for planning and investing in new capacity, which ensures the reliability of supply to meet the long-term demand forecasts of our clients.
            "
        ],
        [
            "id" => 3,
            "image"=>"public/assets/images/services/1.jpg",
            "title" => "Engineering, Procurement and Construction (EPC Services)",
            "text" => "With our Engineering, Procurement and Construction (EPC) service, we deliver large, complex renewable energy projects on a turnkey basis. Such projects include development of microgrids and large Energy Storage Systems (ESS) for industrial, commercial and real-estate development applications. From design to equipment selection and integration, our team of engineers and project managers ensure the solution is delivered as per the agreed upon scope and timeline."
        ],
        [
            "id" => 4,
            "title" => "Energy Management <br /> Consulting",
            "image"=>"public/assets/images/services/2.jpg",
            "text" => "With our advisory and consulting service, we provide clients with technical advice and project management activities for their renewable energy projects based on our expertise and experience in managing such projects to ensure your project is executed according to the agreed upon specifications and within the timeframe and budget. We also liaise with the regulators such as Energy Commission to ensure that the installation meets all regulatory standards. 
            "
        ],
        [
            "id" => 5,
            "title" => "Maintenance and <br /> Servicing",
            "text" => "As with all our installations, we offer maintenance and optional SLA contracts to clients, which cover the warranty period of the installation. With such arrangements, we provide regular preventive and corrective maintenance to ensure the system is working optimally at all times. This enables residents and businesses to focus on their core activities without worrying about their installations."
        ],
        [
            "id" => 6,
            "image" =>"fa-brands fa-linkedin-in",
            "title" => "Financing  Options",
            "text" => "We leverage our partnerships with several financial institutions to provide clients with financing options such as monthly payment terms on their installations. Terms and conditions apply."
        ]
        
    ];

        return view('Frontend.service',['service'=>$data]);
    }

    public function singelService()
    {
        return view('Frontend.singel_service');
    }

    public function pricing()
    {
        return view('Frontend.pricing');
    }

    public function gallery()
    {
        return view('Frontend.gallery');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }
    public function requestQueat()
    {
        return view('Frontend.rquest_queat');
    }

    public function faq()
    {
        return view('Frontend.faq');
    }
    public function project()
    {
        return view('Frontend.project');
    }

    public function singelProject()
    {
        return view('Frontend.single_project');
    }

    public function task(){
        return view('Frontend.task');
    }


}
