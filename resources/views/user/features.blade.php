@extends('user.layouts.app')
@section('title', 'Features')
@section('custom-css')  

@endsection

@section('content')

<main class="main_area"> 
    <!--=====================  Start Banner Area  ====================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner_left">
                            <h2>Integrated Retail <span>Point of Sales</span> and e-Commerce software with powerful features.</h2>
                            <p>Empower your retail business with Scantranx, an omnichannel point of sale software that streamline your operations in the cloud. </p>
                            <p>Scantranx provides you with 360° Retail Solution and unique features for your modern business. Managing single location to multiple locations, E-Commerce and Mobile Commerce? Our solution has been designed as a perfect fit for your business.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/features/banner.png')}} " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_blur_1">
            <img src="{{asset('user/assets/images/home/banner/banner_blur_1.png')}} " alt="">
        </div>
        <div class="banner_blur_2">
            <img src="{{asset('user/assets/images/home/banner/banner_blur_2.png')}} " alt="">
        </div>
    </section>
    <!--=====================  End Banner Area  ====================-->  

    <!--=====================  Start Feature Area  ====================--> 
     <section class="feeature_area">
        <div class="feature_btn_area">
            <div class="container">
                <div class="featoure_btn_carousel">
                    <ul class="nav nav-tabs feature_btn_slide owl-carousel owl-theme" id="myTab" role="tablist"> 
                    
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="Omni-tab" data-bs-toggle="tab" data-bs-target="#Omni" type="button" role="tab" aria-controls="Omni" aria-selected="true">Omni-Channel Solution</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Inventory-tab" data-bs-toggle="tab" data-bs-target="#Inventory" type="button" role="tab" aria-controls="Inventory" aria-selected="false">Inventory Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="POS-tab " data-bs-toggle="tab" data-bs-target="#POS" type="button" role="tab" aria-controls="POS" aria-selected="false">Point of Sales (POS)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="ecommerce-tab " data-bs-toggle="tab" data-bs-target="#ecommerce" type="button" role="tab" aria-controls="ecommerce" aria-selected="false">E-Commerce Solution</button>
                        </li> 
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Customer-tab " data-bs-toggle="tab" data-bs-target="#Customer" type="button" role="tab" aria-controls="Customer" aria-selected="false">Customer Management</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Accounting-tab " data-bs-toggle="tab" data-bs-target="#Accounting" type="button" role="tab" aria-controls="Accounting" aria-selected="false">Accounting Tools</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Reporting-tab " data-bs-toggle="tab" data-bs-target="#Reporting" type="button" role="tab" aria-controls="Reporting" aria-selected="false"> Reporting & Analytics </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Data-tab " data-bs-toggle="tab" data-bs-target="#Data" type="button" role="tab" aria-controls="Data" aria-selected="false">  Data Management  </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="Store-tab " data-bs-toggle="tab" data-bs-target="#Store" type="button" role="tab" aria-controls="Store" aria-selected="false">   Store Management </button>
                        </li>
                         
                      </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature_content">  
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Omni" role="tabpanel" aria-labelledby="Omni-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>Omni-Channel Solution</h2>
                                        <h5>Integration of In-Store and Online Channels.</h5>
                                        <p>Scantranx allows you to provide your customers with great experience by allowing them to move across different channels easily. Both your offline and online channels are well connected and seamlessly integrated. Whether a transaction is processed In-Store or online, Scantranx updates your inventory instantly and in real-time. This great feature allow your customers to Buy Online, Pickup InStore (BOPIS) or commence a transaction online and finalize it In-Store without the need to start all over again.</p>
                                        <h5>Centralized Data.</h5>
                                        <p>Tired of Managing multiple systems or merging Excel files? Scantranx will help you to centralize all your business data and provide you with one view of all your business data.</p> 
                                        <h5>Single and Centralized Inventory.</h5>
                                        <p>Easily Manage both your physical and online store with just a single Inventory System. No need to setup separate software for all your sales channels.</p>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/1.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Inventory" role="tabpanel" aria-labelledby="Inventory-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>Inventory Management</h2>
                                        <h5>Stock Management</h5>
                                        <p>Manage your stocks easily across different channels. Scantranx allows you to transfer products between locations. Our built-in product level alert system notifies you when a product in stock is at a predefined level</p>
                                        <h5>Unlimited Product</h5>
                                        <p>You can add multiple products to your inventory. All Scantranx plan comes with an unlimited product feature.</p> 
                                        <h5>Barcode System</h5>
                                        <p>Easily generate barcode labels for your items with our integrated barcode tools for simple inventory tracking.</p>  
                                        <h5>Bulk Import and Export</h5>
                                        <p>You can quickly import your inventory to Scantranx via excel template for easy setup. This feature saves you time when setting up your system or adding new product to the inventory.</p>  
                                        <h5> Realtime Update </h5>
                                        <p> Whether a transaction occurs In-store or online, Scantranx update your inventory in real-time. This helps you to see what's in stock and to determine products that needs be be re-ordered quickly. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/2.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="POS" role="tabpanel" aria-labelledby="POS-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>Point of Sales (POS)</h2>
                                        <h5> Frictionless Checkout </h5>
                                        <p>Checkout customer quickly and easily to avoid queues in your Brick and Mortar Stores. You can process sales and transactions with just few steps - No lengthy process to ring a sale. </p>
                                        <h5> Hold or Freeze Sale </h5>
                                        <p>You can hold or freeze transactions for later processing. You can suspend a sale to attend to another customer on the queue. </p> 
                                        <h5> Online and Offline Mode </h5>
                                        <p> Internet downtime? No problem. Scantranx POS works perfectly offline and automatically sync once the connection is restored. </p>  
                                        <h5> Split Payment </h5>
                                        <p> You can accept multiple modes of payments for a sale. Scantranx allows you to accept split payments from customers using multiple payment methods such as Credit Cards, Cash and Wallet. </p>
                                        <h5> Digital Receipt </h5>
                                        <p> Want to go paperless? Scantranx digital receipt feature will enable you to send receipt to customers via email. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/3.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>E-Commerce Solution</h2>
                                        <h5> Integrated E-Commerce </h5>
                                        <p> Scantranx comes with an Integrated eCommerce capabilities. No need to subscribe to other platform to sell online. All online orders and customer data are sync in realtime and managed from single dashboard. </p>
                                        <h5> Quick & Easy Setup </h5>
                                        <p> You can launch your online store quickly in minutes. No coding skills or complicated configuration required. </p> 
                                        <h5> Free Website Templates </h5>
                                        <p> Select one of the Integrated professional e-commerce templates to launch your online store quickly. Whatever the nature of your business, you will find a suitable template to setup your ecommerce and start accepting online orders in no time. </p>  
                                        <h5> Payment Integration </h5>
                                        <p> Scantranx is readily integrated with different Payment gateways such as Stripe , Moneris, Elavon and Paystack to accept online payment from your e-commerce website. Just enter your banking information and you are good to go. </p>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/4.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Customer" role="tabpanel" aria-labelledby="Customer-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>Customer Management</h2>
                                        <h5> Customer Profile </h5>
                                        <p> You can profile new customer and edit the details of an existing one. Keep track your customers shopping habits to send them targeted promotions which in turn boost your sales. </p>
                                        <h5> Loyalty Program </h5>
                                        <p> Scantranx comes with a built-in loyalty plan that works both In-Store and online. This helps you rewards your customers based on points, number of visits or volume of transactions. </p> 
                                        <h5> Purchase History </h5>
                                        <p> Our software allows you to keep track of customers' shopping history. This supports your marketing efforts by sending personalized and targeted promotions based on past purchases. </p>  
                                        <h5> Wallet Management </h5>
                                        <p> The Wallet feature allows you to take advance payments from customers or make a credit sale. You can Credit or Debit customers wallet account easily. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/5.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Accounting" role="tabpanel" aria-labelledby="Accounting-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2>Accounting Tools</h2>
                                        <h5> QuickBooks Online Integration </h5>
                                        <p> Scantranx sync all your business and accounting data to QuickBooks in real-time to save you time and increase your productivity. All Sales and Customer information are sent to QuickBooks from the Scantranx POS in real-time. Whether a transaction happens via e-commerce or In-Store, Scantranx instantly sends it to QuickBooks online. All your Items, Invoice and Purchase Order from Scantranx are also sync with QuickBooks automatically to simplify your accounting tasks. </p>
                                        <h5>Invoicing </h5>
                                        <p> You can create professional invoice and send it to customers via email right from the Scantranx back-office. No additional software is required to track your revenue. </p> 
                                        <h5> Purchase Order </h5>
                                        <p> Create Purchase Orders and send to your vendors or suppliers within minutes. Everything happens with just a click of button. </p>  
                                        <h5> Expenses </h5>
                                        <p> Record and track your business expenses across all your business locations including all payments made for services such as Rents, Salary and more. </p>  
                                        <h5>Vendors </h5>
                                        <p> You can create and manage all your suppliers using this feature. Keep detailed information about your vendors such as Name, Company, Telephone and more. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/6.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="Reporting" role="tabpanel" aria-labelledby="Reporting-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2> Reporting & Analytics </h2>
                                        <h5> Sales Report </h5>
                                        <p> Generate sales report easily with just a click of a button. You can view sales revenue for predefined or custom periods. </p>
                                        <h5> Location Report  </h5>
                                        <p> Running your business in multiple locations? Scantranx allows you to see all location reports on a single dashboard. </p> 
                                        <h5>  Stock Report  </h5>
                                        <p>  You can view reports on stock that were added or removed from the inventory easily. Whether the stock is added to your physical location or online, our software present the report to you in a simple and meaningful way.  </p>  
                                        <h5>  Payment Report  </h5>
                                        <p> Scantranx provides you with a comprehensive report on all your payment information. You can generate report on different modes of payment such as Credit Card, Debit Card, Cash, Wallet and Bank Transfer. </p>  
                                        <h5> Expenses Report  </h5>
                                        <p> You can generate report for all your business related expenses over a period of time. With this feature, you can keep track of all your expenses in a simple and efficient way.. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/7.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="Data" role="tabpanel" aria-labelledby="Data-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2> Data Management </h2>
                                        <h5> Centralized Data </h5>
                                        <p>  All your business data are stored centrally. No more scattered data for all your sales channels. All business information can be accessed easily through out the whole organization. </p>
                                        <h5> Automated Data Backup  </h5>
                                        <p> Never lose your business data again due to damaged hardware or crashed software. Scantranx was designed to ensure that all business and system generated data are backed up to our dedicated cloud server to ensure you always have access to them especially when things go wrong with your workstation and terminals.  </p> 
                                        <h5> Enhanced Security </h5>
                                        <p> We take data security and privacy seriously. All your business data are stored on our dedicated cloud server with best security practices. </p>   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/8.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="Store" role="tabpanel" aria-labelledby="Store-tab">
                        <div class="feature_tabs_content section_padding">
                            <div class="row gx-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="banner_left">
                                        <h2> Store Management </h2>
                                        <h5> Employee Management  </h5>
                                        <p> Create employee accounts with roles and privileges. You can assign each employee to corresponding locations. </p>
                                        <h5> Multi Location  </h5>
                                        <p> Managing single to multiple outlets? Our solution grows with your business. You can add new outlets or registers within minutes. Expand your business with no fear. </p> 
                                        <h5> Remote Access  </h5>
                                        <p> As a cloud based solution, you can monitor your business from anywhere, anytime via the internet. Stay updated with your business. Whether you are at home, work or on the go. </p>   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img">
                                        <img src="{{asset('user/assets/images/features/9.png')}} " alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                  </div>
                  
            </div>
        </div>
     </section>
    <!--=====================  End Feature Area  ====================-->  

    <!--=====================  Start Operations Area  ====================--> 
    <section class="operation_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="operation_left">
                        <h3>Streamline your <span>operations</span> with Scantranx</h3>
                        <p>Make your restaurant prosperous with our cloud based restaurant management software.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="operation_btn"> 
                            <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                            <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Operations Area  ====================--> 

</main>
        

@endsection

@section('script')
 

    <script>  


        function blog_post_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#blog_post_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("blog_post_form", data.errors);
            }
        } 

    </script>


@endsection