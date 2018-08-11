@extends('adminpanel.layout.app')
@section('title', 'Dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="row home1_analys">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="statistic-box">
                        <div class=small>Happy Customers </div>
                        <h2><span class=count-number>85</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                        <div class="progress-radial blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                            <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value">95%</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="statistic-box">
                        <div class=small>Total page views</div>
                        <h2><span class=count-number>321</span>M <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                        <div class="progress-radial yellow">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                            <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value">75%</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                    <div class="statistic-box">
                        <div class=small>Total Sales</div>
                        <h2><span class=count-number>5489</span>$ <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                        <div class="progress-radial pink">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                            <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value">60%</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 hidden-sm hidden-md col-lg-3">
                    <div class="statistic-box">
                        <div class=small>Visitors online</div>
                        <h2><span class=count-number>696</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                        <div class="progress-radial green">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                            <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                            <div class="progress-value">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 hidden-520">
                    <div class="panel panel-bd lobidrag">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-panel></i>
                                <h4>CSS animations Chart</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <div id=chartdiv2></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 res_400">
                    <div class="panel panel-bd lobidisable">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-email></i>
                                <h4>Messages</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <div class=message_inner>
                                <div class=message_widgets>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Farzana Yasmin</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar2.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Mubin Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status away pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar3.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Mozammel Hoque</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar5.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Amir Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Salman Khan</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Farzana Yasmin</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status available pull-right"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class=inbox-item>
                                            <div class=inbox-item-img><img src="/adminpanel/assets/dist/img/avatar4.png" class=img-circle alt=""></div>
                                            <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                            <span class=inbox-item-date>-13:40 PM</span>
                                            <p class=inbox-item-text>Hey! there I'm available...</p>
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Zero configuration</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p class="m-b-15">All you need to do to use it with your own tables is to call the construction function:
                                <code>$().DataTable();</code>.</p>
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Abdullah</td>
                                        <td>Most Specific</td>
                                        <td>NewZealand</td>
                                        <td>91</td>
                                        <td>2014/12/04</td>
                                        <td>$485,000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 visible-lg">
                    <div class="panel panel-bd lobidisable">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-stats-up></i>
                                <h4>Recent Activities</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <ul class="activity-list list-unstyled">
                                <li class=activity-purple>
                                    <small class=text-muted>9 minutes ago</small>
                                    <p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
                                </li>
                                <li class=activity-danger>
                                    <small class=text-muted>15 minutes ago</small>
                                    <p>You followed Olivia Williamson</p>
                                </li>
                                <li class=activity-warning>
                                    <small class=text-muted>22 minutes ago</small>
                                    <p>You <span class=text-danger>subscribed</span> to Harold Fuller</p>
                                </li>
                                <li class=activity-primary>
                                    <small class=text-muted>30 minutes ago</small>
                                    <p>You updated your profile picture</p>
                                </li>
                                <li>
                                    <small class=text-muted>35 minutes ago</small>
                                    <p>You deleted homepage.psd</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xs-6 full-630">
                    <div class="panel panel-bd lobidisable lg-mb0">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-user></i>
                                <h4>Chat</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <ul class=chat_list>
                                <li class=clearfix>
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar4.png" alt=male>
                                        <i>10:00</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>John Deo</i>
                                            <p>Hello! ✋</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar5.png" alt=Female>
                                        <i>10:01</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>Marco Lopes</i>
                                            <p>Hi, How are you?☺ What about our next meeting?😼</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar4.png" alt=male>
                                        <i>10:01</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>John Deo</i>
                                            <p>Yeah everything is fine 👍</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar5.png" alt=male>
                                        <i>10:02</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>Marco Lopes</i>
                                            <p>Wow that's great 👏</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar4.png" alt=male>
                                        <i>10:03</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>John Deo</i>
                                            <p>What can you do with HTML VIEWER ?</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar5.png" alt=male>
                                        <i>10:04</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>Marco Lopes</i>
                                            <p>It helps to beautify/format your HTML.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix odd">
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar5.png" alt=male>
                                        <i>10:04</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <i>Marco Lopes</i>
                                            <p>It helps to save and share HTML content and show the HTML output</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=clearfix>
                                    <div class=chat-avatar>
                                        <img src="/adminpanel/assets/dist/img/avatar4.png" alt=male>
                                        <i>10:05</i>
                                    </div>
                                    <div class=conversation-text>
                                        <div class=ctext-wrap>
                                            <img src="/adminpanel/assets/dist/img/1f600.png" alt="">
                                            <img src="/adminpanel/assets/dist/img/1f60e.png" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=panel-footer>
                            <div class=input-group>
                                <input class="form-control emojionearea" placeholder="Your Message. . . ">
                                <span class=input-group-btn>
                                            <button class="btn btn-base" type=button>Send</button>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6 full-630">
                    <div class="panel panel-bd lobidisable lg-mb0">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-pie-chart></i>
                                <h4>Colors Pie Chart</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <div id=chartPie></div>
                            <div class=chart-legend>
                                <div class=chart-legend-item>
                                    <div class="chart-legend-color red"></div>
                                    <p>From Google</p>
                                    <p class=percentage>63.259 %</p>
                                </div>
                                <div class=chart-legend-item>
                                    <div class="chart-legend-color blue"></div>
                                    <p>Your Website</p>
                                    <p class=percentage>25.321 %</p>
                                </div>
                                <div class=chart-legend-item>
                                    <div class="chart-legend-color green"></div>
                                    <p>Other Search Engines</p>
                                    <p class=percentage>11.42 %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 visible-lg">
                    <div class="panel panel-bd lobidisable lg-mb0">
                        <div class=panel-heading>
                            <div class=panel-title>
                                <i class=ti-archive></i>
                                <h4>Calender</h4>
                            </div>
                        </div>
                        <div class=panel-body>
                            <div class=monthly_calender>
                                <div class=monthly id=m_calendar></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection