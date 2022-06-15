<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       webdevteam
 * @since      1.0.0
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="main">


    <div class="menu_lat">
        <ul>
            <li class="menu-heading">Dashboards</li>
            <li class=" list_menu active">
                <a data-toggle="tab" href="#my_library">
                    <svg class="change-color" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M4 21V9L12 3L20 9V21H14V14H10V21Z"/></svg>
                    My Library
                </a>
            </li>
            <li class=" list_menu">
                <a data-toggle="tab" href="#coming_soon">
                    <svg class="change-color" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M7.75 16.25Q8.625 17.075 9.713 17.538Q10.8 18 12 18Q14.5 18 16.25 16.25Q18 14.5 18 12Q18 9.5 16.25 7.75Q14.5 6 12 6V12ZM12 22Q9.925 22 8.1 21.212Q6.275 20.425 4.925 19.075Q3.575 17.725 2.788 15.9Q2 14.075 2 12Q2 9.925 2.788 8.1Q3.575 6.275 4.925 4.925Q6.275 3.575 8.1 2.787Q9.925 2 12 2Q14.075 2 15.9 2.787Q17.725 3.575 19.075 4.925Q20.425 6.275 21.212 8.1Q22 9.925 22 12Q22 14.075 21.212 15.9Q20.425 17.725 19.075 19.075Q17.725 20.425 15.9 21.212Q14.075 22 12 22Z"/></svg>
                    Coming Soon
                </a>
            </li>
            <li class="menu-heading">Something xd</li>
            <li class="menu-heading">My Account</li>
            <li class=" list_menu">
                <a data-toggle="tab" href="#user-profile">
                    <svg class="change-color" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M5.85 17.1Q7.125 16.125 8.7 15.562Q10.275 15 12 15Q13.725 15 15.3 15.562Q16.875 16.125 18.15 17.1Q19.025 16.075 19.513 14.775Q20 13.475 20 12Q20 8.675 17.663 6.337Q15.325 4 12 4Q8.675 4 6.338 6.337Q4 8.675 4 12Q4 13.475 4.488 14.775Q4.975 16.075 5.85 17.1ZM12 13Q10.525 13 9.512 11.988Q8.5 10.975 8.5 9.5Q8.5 8.025 9.512 7.012Q10.525 6 12 6Q13.475 6 14.488 7.012Q15.5 8.025 15.5 9.5Q15.5 10.975 14.488 11.988Q13.475 13 12 13ZM12 22Q9.925 22 8.1 21.212Q6.275 20.425 4.925 19.075Q3.575 17.725 2.788 15.9Q2 14.075 2 12Q2 9.925 2.788 8.1Q3.575 6.275 4.925 4.925Q6.275 3.575 8.1 2.787Q9.925 2 12 2Q14.075 2 15.9 2.787Q17.725 3.575 19.075 4.925Q20.425 6.275 21.212 8.1Q22 9.925 22 12Q22 14.075 21.212 15.9Q20.425 17.725 19.075 19.075Q17.725 20.425 15.9 21.212Q14.075 22 12 22Z"/></svg>
                    User Profile
                </a>
            </li>
            <li class=" list_menu">
                <a data-toggle="tab" href="#log_out">
                    <svg class="change-color" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M5 21Q4.175 21 3.587 20.413Q3 19.825 3 19V5Q3 4.175 3.587 3.587Q4.175 3 5 3H12V5H5Q5 5 5 5Q5 5 5 5V19Q5 19 5 19Q5 19 5 19H12V21ZM16 17 14.625 15.55 17.175 13H9V11H17.175L14.625 8.45L16 7L21 12Z"/></svg>
                    Log Out
                </a>
            </li>
        </ul>
    </div>

    <div class="container_full">
        <div class="tab-content">

            <!-- My Library -->
            <div id="my_library" class="tab-pane fade active in">
                <div class="header">
                    <h4>Welcome</h4>
                </div>
                <div class="content_body">
                    <div class="row">

                        <div class="filter-buttons">
                            <div class="list-view-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M3 14.5V13H17V14.5ZM3 10.75V9.25H17V10.75ZM3 7V5.5H17V7Z"/></svg>
                            </div>
                            <div class="grid-view-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"><path d="M16.583 18.333H3.417Q2.688 18.333 2.177 17.823Q1.667 17.312 1.667 16.583V3.417Q1.667 2.688 2.177 2.177Q2.688 1.667 3.417 1.667H16.583Q17.312 1.667 17.823 2.177Q18.333 2.688 18.333 3.417V16.583Q18.333 17.312 17.823 17.823Q17.312 18.333 16.583 18.333ZM9.125 9.125V3.417H3.417Q3.417 3.417 3.417 3.417Q3.417 3.417 3.417 3.417V9.125ZM9.125 10.875H3.417V16.583Q3.417 16.583 3.417 16.583Q3.417 16.583 3.417 16.583H9.125ZM10.875 10.875V16.583H16.583Q16.583 16.583 16.583 16.583Q16.583 16.583 16.583 16.583V10.875ZM10.875 9.125H16.583V3.417Q16.583 3.417 16.583 3.417Q16.583 3.417 16.583 3.417H10.875Z"/></svg>
                            </div>
                        </div>


                        <ol class="conferences_container list list-view-filter ">
                            <div class="conferences_cards hover li">
                                <div class="img_box">
                                    <img src="https://www.liveandinvestoverseasconferences.com/wp-content/uploads/2019/11/algarve-cliffs-beach-portugal.png"
                                        alt="">

                                </div>
                                <div class="content">
                                    <div class="svg_sticker">
                                        <svg width="15" height="23" viewBox="0 0 15 23">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M-0.000488281 -0.000244141H14.9995V23.0002L7.4999 18.9412L-0.000488281 23.0002V-0.000244141Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3>Live And Invest In Europe Conference 2020</h3>
                                    <p><span><svg width="16" height="16">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5 6H2V9H5V6ZM5 10H2V13H5V10ZM6 10H10V13H6V10ZM10 9H6V6H10V9ZM11 10V13H14V10H11ZM14 9H11V6H14V9ZM0 3.2V5V6V13.6C0 14.3 0.7 15 1.4 15H14.6C15.3 15 16 14.4 16 13.6V6V5V3.2C16 2 15 1 13.7 1H2.2C1 1 0 2 0 3.2Z">
                                                </path>
                                            </svg></span> Oct. 20 - 23, 2020</p>
                                    <p> <span><svg width="16" height="16">
                                                <path
                                                    d="M7.50073 0C3.90073 0 1.00073 2.9 1.00073 6.5C1.00073 11 7.50073 16 7.50073 16C7.50073 16 14.0007 11 14.0007 6.5C14.0007 2.9 11.1007 0 7.50073 0ZM7.50073 9C6.10073 9 5.00073 7.9 5.00073 6.5C5.00073 5.1 6.10073 4 7.50073 4C8.90073 4 10.0007 5.1 10.0007 6.5C10.0007 7.9 8.90073 9 7.50073 9Z">
                                                </path>
                                            </svg></span> Virtual</p>
                                </div>
                                <div class="btn_container">
                                    <a href="https://www.liveandinvestoverseasconferences.com/euconf-2020/">Visit
                                        Here</a>
                                </div>
                            </div>

                            <div class="conferences_cards hover li">
                                <div class="img_box">
                                    <img src="https://www.liveandinvestoverseasconferences.com/wp-content/uploads/2019/05/offshore-wealth.jpg"
                                        alt="">

                                </div>
                                <div class="content">
                                    <div class="svg_sticker">
                                        <svg width="15" height="23" viewBox="0 0 15 23">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M-0.000488281 -0.000244141H14.9995V23.0002L7.4999 18.9412L-0.000488281 23.0002V-0.000244141Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h3>Offshore Wealth Virtual Summit 2020</h3>
                                    <p><span><svg width="16" height="16">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5 6H2V9H5V6ZM5 10H2V13H5V10ZM6 10H10V13H6V10ZM10 9H6V6H10V9ZM11 10V13H14V10H11ZM14 9H11V6H14V9ZM0 3.2V5V6V13.6C0 14.3 0.7 15 1.4 15H14.6C15.3 15 16 14.4 16 13.6V6V5V3.2C16 2 15 1 13.7 1H2.2C1 1 0 2 0 3.2Z">
                                                </path>
                                            </svg></span> Nov. 17 - 20, 2020</p>
                                    <p> <span><svg width="16" height="16">
                                                <path
                                                    d="M7.50073 0C3.90073 0 1.00073 2.9 1.00073 6.5C1.00073 11 7.50073 16 7.50073 16C7.50073 16 14.0007 11 14.0007 6.5C14.0007 2.9 11.1007 0 7.50073 0ZM7.50073 9C6.10073 9 5.00073 7.9 5.00073 6.5C5.00073 5.1 6.10073 4 7.50073 4C8.90073 4 10.0007 5.1 10.0007 6.5C10.0007 7.9 8.90073 9 7.50073 9Z">
                                                </path>
                                            </svg></span> Virtual</p>
                                </div>
                                <div class="btn_container">
                                    <a href="https://www.liveandinvestoverseasconferences.com/euconf-2020/">Visit
                                        Here</a>
                                </div>
                            </div>

                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

                            <div class="xxx" style="display: flex; flex-wrap: wrap; margin: auto; width: 100%; ">


                                <div class="courses-container">
                                    <div class="course">
                                        <div class="course-preview">
                                            <h6>Virtual</h6>
                                            <h2>Conference 2020</h2>
                                            <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                        <div class="course-info"
                                            style="background: linear-gradient( rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.5) ), url('https://www.liveandinvestoverseasconferences.com/wp-content/uploads/2019/11/algarve-cliffs-beach-portugal.png');">
                                            <!-- <div class="progress-container">
                                            <div class="progress"></div>
                                            <span class="progress-text">
                                                6/9 Challenges
                                            </span>
                                        </div> -->
                                            <h6>Oct. 20 - 23, 2020</h6>
                                            <h2>Live And Invest In Europe </h2>
                                            <button class="btn">Visit Here</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="courses-container">
                                    <div class="course">
                                        <div class="course-preview">
                                            <h6>Virtual</h6>
                                            <h2>Conference 2020</h2>
                                            <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                        <div class="course-info"
                                            style="background: linear-gradient( rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.5) ), url('https://www.liveandinvestoverseasconferences.com/wp-content/uploads/2019/05/offshore-wealth.jpg');     background-position: 22% 79%;">
                                            <!-- <div class="progress-container">
                                            <div class="progress"></div>
                                            <span class="progress-text">
                                                6/9 Challenges
                                            </span>
                                        </div> -->
                                            <h6>Nov. 17 - 20, 2020</h6>
                                            <h2>Offshore Wealth Virtual Summit </h2>
                                            <button class="btn">Visit Here</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="courses-container">
                                    <div class="course">
                                        <div class="course-preview">
                                            <h6>Virtual</h6>
                                            <h2>Conference 2020</h2>
                                            <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                        <div class="course-info"
                                            style="background: linear-gradient( rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.5) ), url('https://www.liveandinvestoverseasconferences.com/wp-content/uploads/2019/05/offshore-wealth.jpg');     background-position: 22% 79%; ">
                                            <!-- <div class="progress-container">
                                            <div class="progress"></div>
                                            <span class="progress-text">
                                                6/9 Challenges
                                            </span>
                                        </div> -->
                                            <h6>Nov. 17 - 20, 2020</h6>
                                            <h2>Offshore Wealth Virtual Summit </h2>
                                            <button class="btn">Visit Here</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

                            <div class="zzz" style="display: flex;">
                                <section class="cards">
                                    <article class="card card--1">
                                        <div class="card__info-hover">
                                            <svg class="card__like" viewBox="0 0 24 24">
                                                <path fill="#000000"
                                                    d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                            </svg>
                                            <div class="card__clock-info">
                                                <svg class="card__clock" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                                </svg><span class="card__time">OCT. 20 - 23, 2020</span>
                                            </div>

                                        </div>
                                        <div class="card__img"></div>
                                        <a href="#" class="card_link">
                                            <div class="card__img--hover"></div>
                                        </a>
                                        <div class="card__info">
                                            <span class="card__category"> VIRTUAL</span>
                                            <h3 class="card__title">Live And Invest In Europe</h3>
                                            <span class="card__by"> <a href="#" class="card__author"
                                                    title="author">Conference 2020</a></span>
                                        </div>
                                    </article>


                                    <article class="card card--2">
                                        <div class="card__info-hover">
                                            <svg class="card__like" viewBox="0 0 24 24">
                                                <path fill="#000000"
                                                    d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                            </svg>
                                            <div class="card__clock-info">
                                                <svg class="card__clock" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                                                </svg><span class="card__time">NOV. 17 - 20, 2020</span>
                                            </div>

                                        </div>
                                        <div class="card__img"></div>
                                        <a href="#" class="card_link">
                                            <div class="card__img--hover"></div>
                                        </a>
                                        <div class="card__info">
                                            <span class="card__category"> VIRTUAL</span>
                                            <h3 class="card__title">Offshore Wealth Virtual Summit</h3>
                                            <span class="card__by"> <a href="#" class="card__author"
                                                    title="author">Conference 2020</a></span>
                                        </div>
                                    </article>

                                </section>
                            </div>


                        </ol>
                    </div>
                </div>
            </div>




        </div>


    </div>


</div>