<?php
/*
* Template Name: Branches
*/

get_header(); ?>

    <div id="branch-vue">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="my-title mt-5 mb-5">COLLEGES</h2>
                        </div>
                        <div class="col-md-12 border rounded-top mt-2" v-for="(branch,index) in branches">
                            <div class="row py-2 pl-2 bg-gray cursor-pointer" v-on:click="clicked(branch,$event,index)" ref="branches">
                                <div class="col-md-11 col-10">
                                    {{branch.name}}
                                </div>
                                <div class="col-md-1 col-2 text-right">
                                     <i class="fa fa-caret-right" :class="[branch.isActive ? 'rotatedown' : 'rotateback']"></i>
                                </div>
                            </div>
<!-- 							isActive ? activeClass : ''
							dropbranch -->
							<div class="beforedrop" :id="'branch-'+branch.id">
								<div class="col-md-12 py-2 px-0 dropdown-height">
									<div class="container pb-3">
										<div class="row">
											<div class="col-md-6 pt-90">
												<div :id="'branch-car-'+branch.id" class="carousel slide" data-ride="carousel">
												  <ol class="carousel-indicators">
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="0" class="active"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="1"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="2"></li>
												  </ol>
												  <div class="carousel-inner">
													<div v-for="slider in branch.sliderlinks" class="carousel-item" :class="{active: slider.isActive}">
													  <img class="d-block w-100 branch-slider-img" :src="slider.link" alt="First slide">
													</div>
												  </div>
												  <a class="carousel-control-prev" :href="'#branch-car-'+branch.id" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												  </a>
												  <a class="carousel-control-next" :href="'#branch-car-'+branch.id" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												  </a>
												</div>
											</div>
											<div class="col-md-6 p-in-branches">
												<h4 class="mt-3">
													{{branch.name}}
												</h4>
												<div class="col-md-12 mt-3 mt-md-0">
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fas fa-map-marker" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchaddress}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fas fa-phone" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchnumber}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-envelope" aria-hidden="true"></i> 
														</div>
														<div class="col-md-11 col-10">
															<p class="branch-email">{{branch.branchemail}}</p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<h5 class="my-3">Programs</h5>
													<div class="col-md-12 p-0">
														<div v-for="program in branch.programs">
                                                            <h6 class="font-weight-bold">
                                                                {{program.name}}
                                                            </h6>
                                                            <ul style="list-style: none; padding-left: 20px;">
																<li v-for="course in program.courses"><a :href="course.href">{{course.name}}</a>
																<ul style="list-style: none; padding-left: 20px;">
                                                               		 <li v-for="special in course.specials"><a :href="special.href">{{special.name}}</a></li>
                                                          	   </ul>
																</li>
                                                            </ul>
                                                        </div>
													</div>
												</div>
												<div class="col-md-12 put-contact">
													<!-- <button class="btn btn-block btn-primary" type="submit">Other Courses</button> -->
													<!-- <input id="other-courses" placeholder="What course are you finding? Type here" type="text"> -->
													 <!-- echo do_shortcode('[contact-form-7 id="1773" title="Other Courses"]');  -->
<!-- 													echo do_shortcode('[wpforms id="1935" title="false" description="false"]');  -->
<!-- 													 <form class="program-form">
														 <input type="hidden" :value="branch.branchemail" class="user-hide">
														<div class="form-row">
															<div class="form-group col-md-5">
																<input type="email" class="form-control user-email" placeholder="Email" required>
															</div>
															<div class="form-group col-md-5">
																<input type="text" class="form-control user-message" placeholder="Other Course / Concern" required>
															</div>
															<div class="form-group col-md-2">
																<button class="btn btn-block btn-primary" type="submit">Send</button>
															</div>
														</div>
													 </form> -->
												</div>
												<div class="col-md-12 mb-3">
													<div class="row text-center">
														<div class="col-md-7">
															<button class="btn btn-block btn-primary" type="submit" onclick="window.open('/admissions/download-application-form/')">Download Application Form</button>
														</div>
														<div class="col-md-1">
															<span class="align-middle py-2 text-center">or</span>
														</div>
														<div class="col-md-4">
															<button class="btn btn-block btn-primary" type="submit" onclick="window.open('https://www.informatics.edu.ph/apply-online-v2/')">Apply Online</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <h2 class="my-title mt-5 mb-5">INSTITUTES</h2>
                        </div>
                        <div class="col-md-12 border rounded-top mt-2" v-for="(branch,index) in institutes">
                            <div class="row py-2 pl-2 bg-gray cursor-pointer" v-on:click="clickedInstitute(branch,index)">
                                <div class="col-md-11 col-10">
                                    {{branch.name}}
                                </div>
                                <div class="col-md-1 col-2 text-right">
                                     <i class="fa fa-caret-right" :class="[branch.isActive ? 'rotatedown' : 'rotateback']"></i>
                                </div>
                            </div>
<!-- 							isActive ? activeClass : ''
							dropbranch -->
							<div class="beforedrop" :id="'branch-'+branch.id">
								<div class="col-md-12 py-2 px-0 dropdown-height">
									<div class="container pb-3">
										<div class="row">
											<div class="col-md-6 pt-90">
												<div :id="'branch-car-'+branch.id" class="carousel slide" data-ride="carousel">
												  <ol class="carousel-indicators">
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="0" class="active"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="1"></li>
													<li :data-target="'#branch-car-'+branch.id" data-slide-to="2"></li>
												  </ol>
												  <div class="carousel-inner">
													<div v-for="slider in branch.sliderlinks" class="carousel-item" :class="{active: slider.isActive}">
													  <img class="d-block w-100 branch-slider-img" :src="slider.link" alt="First slide">
													</div>
												  </div>
												  <a class="carousel-control-prev" :href="'#branch-car-'+branch.id" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												  </a>
												  <a class="carousel-control-next" :href="'#branch-car-'+branch.id" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												  </a>
												</div>
											</div>
											<div class="col-md-6 p-in-branches">
												<h4 class="mt-3">
													{{branch.name}}
												</h4>
												<div class="col-md-12 mt-3 mt-md-0">
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fas fa-map-marker" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchaddress}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fas fa-phone" aria-hidden="true"></i>
														</div>
														<div class="col-md-11 col-10">
															<p>{{branch.branchnumber}}</p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-1 col-2">
															<i class="fa fa-envelope" aria-hidden="true"></i> 
														</div>
														<div class="col-md-11 col-10">
															<p class="branch-email">{{branch.branchemail}}</p>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<h5 class="my-3">Programs</h5>
													<div class="col-md-12 p-0">
														<div v-for="program in branch.programs">
                                                            <h6 class="font-weight-bold">
                                                                {{program.name}}
                                                            </h6>
                                                            <ul style="list-style: none; padding-left: 20px;">
																<li v-for="course in program.courses"><a :href="course.href">{{course.name}}</a>
																<ul style="list-style: none; padding-left: 20px;">
                                                               		 <li v-for="special in course.specials"><a :href="special.href">{{special.name}}</a></li>
                                                          	   </ul>
																</li>
                                                            </ul>
                                                        </div>
													</div>
												</div>
												<div class="col-md-12 put-contact-2">
													<!-- <button class="btn btn-block btn-primary" type="submit">Other Courses</button> -->
													<!-- <input id="other-courses" placeholder="What course are you finding? Type here" type="text"> -->
													 <!-- echo do_shortcode('[contact-form-7 id="1773" title="Other Courses"]');  -->
<!-- 													 <form class="program-form">
														 <input type="hidden" :value="branch.branchemail" class="user-hide">
														<div class="form-row">
															<div class="form-group col-md-5">
																<input type="email" class="form-control user-email" placeholder="Email" required>
															</div>
															<div class="form-group col-md-5">
																<input type="text" class="form-control user-message" placeholder="Other Course / Concern" required>
															</div>
															<div class="form-group col-md-2">
																<button class="btn btn-block btn-primary" type="submit">Send</button>
															</div>
														</div>
													 </form> -->
												</div>
												<div class="col-md-12 mb-3">
													<div class="row text-center">
														<div class="col-md-7">
															<button class="btn btn-block btn-primary" type="submit" onclick="window.open('/admissions/download-application-form/')">Download Application Form</button>
														</div>
														<div class="col-md-1">
															<span class="align-middle py-2 text-center">or</span>
														</div>
														<div class="col-md-4">
															<button class="btn btn-block btn-primary" type="submit" onclick="window.open('https://www.informatics.edu.ph/apply-online-v2/')">Apply Online</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<script>
	(function(){
		new Vue({
			el:'#branch-vue',
			data(){
				return {
					offsets:[],
					sizes:'',
					branched:'',
					branches:[
						{
							id:1,
							name:'Caloocan',
							isActive:false,
							height:'',
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/caloocan.jpg',
								isActive: false}
							],
							branchaddress:'380 Rizal Avenue Extension Corner 11th Avenue Grace Park, Metro Manila',
							branchnumber:'(02) 8365-2361, 0927-6619133, 0926-9808331',
							branchemail:'info.caloocan@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology with specialization in: ',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
											specials:[
												{
													name:'> Applied Programming',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
												},
												{
													name:'> Cyber Security',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
												}
											]
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science with Specialization in Internet of Things',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration with specialization in Marketing Management',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-business-administration/'
                                        }
                                    ]
                                }
								
							]
						},
						{
							id:2,
							name:'Cebu',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cebu.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cebu.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cebu.jpg',
								isActive: false}
							],
							branchaddress:'C.L. Benedicto Bldg. J. De Vera Street Cebu City',
							branchnumber:'(032) 231-0380, 0998-5538530',
							branchemail:'info.cebu@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/',
											specials:[
												{
													name:'> Computer Progamming NC III',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Java & .Net Techonology NCIII',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Animation NC II',
													href:'/programs/diploma-courses/'
												}
											]
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Computer Science',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
                                        },
                                        {
                                            name:'Bachelor of Science in Entrepreneurship',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-entrepreneurship/'
                                        },
                                        {
                                            name:'Bachelor of Science in Information Systems',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-system/'
                                        }
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Information Technology',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Diploma in Gaming and Animation',
											href:'/programs/diploma-courses/'
                                        }
                                    ]
                                }
								
							]
						},
						{
							id:3,
							name:'Eastwood',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/eastwood.jpg',
								isActive: false}
							],
							branchaddress:'185 E. Rodriguez Jr. Avenue (C5), Acropolis, Bgy. Bagumbayan, Quezon City',
							branchnumber:'(02) 8667-3094, 0977-1057912',
							branchemail:'info.eastwood@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
											specials:[
												{
													name:'> Applications Development',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												},
												{
													name:'> Networks and Cyber Security',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												},
												{
													name:'> Multimedia Arts',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												}
											]
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science with Specialization in:',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/',
											specials:[
												{
													name:'> Data Science',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
												},
												{
													name:'> Internet of Things',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
												}
											]
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration with specialization in Digital Marketing',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-business-administration/'
                                        },
										{
                                            name:'Bachelors of Science in Information Systems with specialization in Project Management',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-system/'
                                        }
                                    ]
                                }
							]
						},
						{
							id:4,
							name:'Cavite',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cavite.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cavite.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/cavite.jpg',
								isActive: false}
							],
							branchaddress:'Informatics Bldg. E. Aguinaldo Highway, Tanzang Luma V, Imus City, Cavite',
							branchnumber:'(046) 474 -0389, (046) 471-2310, 0917 575 3227',
							branchemail:'info.cavite@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/',
											specials:[
												{
													name:'> Computer Progamming NC III',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Java & .Net Techonology NCIII',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Animation NC II',
													href:'/programs/diploma-courses/'
												}
											]
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Accounting Information Systems',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-accounting-information-system/'
                                        },
                                        {
                                            name:'Bachelor of Science in Management Accounting',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-management-accounting/'
                                        },
                                        {
                                            name:'Bachelor of Science in Office Administration',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-office-administration/'
                                        }
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Information Technology',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Diploma in Gaming and Animation',
											href:'/programs/diploma-courses/'
                                        }
                                    ]
                                }
							]
						},
						{
							id:5,
							name:'Manila',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/manila.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/manila.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/manila.jpg',
								isActive: false}
							],
							branchaddress:'2070 BDO Bldg. Recto Ave Quiapo, Manila',
							branchnumber:'(02) 3488-3033, 0917-5849128',
							branchemail:'info.manila@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities and Social Science (HUMSS)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand (GAS)',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology with specialization in:',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
											specials:[
												{
													name:'> Applications Development',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												},
												{
													name:'> Multimedia Arts',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												}
											]
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-business-administration/'
                                        }
                                    ]
                                }
							]
						},
						{
							id:6,
							name:'Northgate',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/12/Info-Website-09.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/12/Info-Website-09.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/12/Info-Website-09.jpg',
								isActive: false}
							],
							branchaddress:'Indo China Drive, Northgate Cyberzone Filinvest Corporate City, Alabang Muntinlupa City, Metro Manila',
							branchnumber:'(02) 8772-2474, 0917-8234667, 0922-8839659',
							branchemail:'info.northgate@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'Humanities And Social Sciences',
											href:'/programs/senior-high-school-tracks/'
                                        },
                                        {
                                            name:'General Academic Strand',
											href:'/programs/senior-high-school-tracks/'
                                        }
                                    ]
                                },
								{
                                    name:'Higher Education',
                                    courses:[
                                        {
                                            name:'Bachelor of Science in Information Technology with specialization in:',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/',
											specials:[
												{
													name:'> Applications Development',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												},
												{
													name:'> Cyber Security',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-information-technology-2/'
												}
											]
                                        },
                                        {
                                            name:'Bachelor of Science in Business Administration',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-business-administration/'
                                        },
                                        {
                                            name:'Bachelor of Science in Computer Science with specialization in:',
											href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/',
											specials:[
												{
													name:'> Internet of Things',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
												},
												{
													name:'> Data Science',
													href:'/programs/bachelors-degree-programs/bachelor-of-science-in-computer-science/'
												}
											]
                                        }
                                    ]
                                }
							]
						}
					],
					institutes:[
						{
							id:7,
							name:'Baguio',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/baguio.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/baguio.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/baguio.jpg',
								isActive: false}
							],
							branchaddress:'3/F Decibar Bldg., #65 Lower Bonifacio St., Baguio City',
							branchnumber:'(074) 442-3313, 0917-8336240',
							branchemail:'info.baguio@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/',
											specials:[
												{
													name:'> Computer Progamming NC III',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Computer System Servicing NC II',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Visual Graphics and Design NC III',
													href:'/programs/diploma-courses/'
												}
											]
										}
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Information Technology',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Computer Programming NC III',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Computer System Servicing NC II',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Visual Graphics Design NC III',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Web Development',
											href:'/programs/diploma-courses/'
                                        },
										{
											name:'Web Design',
											href:'/programs/diploma-courses/'
										}
                                    ]
                                }
								
							]
						},
						{
							id:8,
							name:'Cagayan De Oro',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/cdo.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/cdo.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/cdo.jpg',
								isActive: false}
							],
							branchaddress:'2nd level, Stary Bldg. Max Suniel St., Carmen, Cagayan De Oro',
							branchnumber:'(088) 323-2914, 0917-7033467, 0922-8339760',
							branchemail:'info.cdo@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/',
											specials:[
												{
													name:'> Computer Progamming NC III',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Computer System Servicing NC II',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Animation NC II',
													href:'/programs/diploma-courses/'
												}
											]
										}
                                    ]
                                },
								{
                                    name:'Diploma Programs',
                                    courses:[
                                        {
                                            name:'Diploma in Computer Studies (Computer Science)',
											href:'/programs/diploma-courses/'
										},
										 {
                                            name:'Diploma in Computer Studies (Multimedia and Internet)',
											href:'/programs/diploma-courses/'
										},
										 {
                                            name:'Diploma Animation NC III',
											href:'/programs/diploma-courses/'
										},
										 {
                                            name:'Diploma Contact Center Services NC II',
											href:'/programs/diploma-courses/'
										},
										 {
                                            name:'Computer System Servicing NC II',
											href:'/programs/diploma-courses/'
										}
                                    ]
                                },
								{
                                    name:'Certification Programs',
                                    courses:[
                                        {
                                            name:'Programmer Certification',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Multimedia Artist Certification',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Web Application Developer Certification',
											href:'/programs/diploma-courses/'
                                        },
                                        {
                                            name:'Game Developer Certification',
											href:'/programs/diploma-courses/'
                                        }
                                    ]
                                }
							]
						},
						{
							id:9,
							name:'Consolacion',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/consolacion.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/consolacion.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/consolacion.jpg',
								isActive: false}
							],
							branchaddress:'Brgy. Pitogo, Consolacion Cebu',
							branchnumber:'(032) 234 -7806, 0917-8364963',
							branchemail:'info.consolacion@informatics.com.ph',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                            name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/',
											specials:[
												{
													name:'> Computer Progamming NC III',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Computer System Servicing NC II',
													href:'/programs/diploma-courses/'
												},
												{
													name:'> Animation NC II',
													href:'/programs/diploma-courses/'
												}
											]
										},
										 {
                                            name:'Accounting and Business Management Strand (ABM)',
											href:'/programs/senior-high-school-tracks/'
										},
										 {
                                            name:'Humanities And Social Sciences',
											href:'/programs/senior-high-school-tracks/'
										},
										 {
                                            name:'General Academic Strand',
											href:'/programs/senior-high-school-tracks/'
										}
                                    ]
                                }
							]
						},
// 						{
// 							id:10,
// 							name:'Megamall',
// 							isActive:false,
// 							sliderlinks:[
// 								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/megamall-e1548723232143.jpg',
// 								isActive: true},
// 								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/megamall-e1548723232143.jpg',
// 								isActive: false},
// 								{link:'https://www.informatics.edu.ph/wp-content/uploads/2018/09/megamall-e1548723232143.jpg',
// 								isActive: false}
// 							],
// 							branchaddress:'Level 5, Building A Baranggay, Wack Wack Mandaluyong City, Philippines 1550',
// 							branchnumber:'(02) 635-3608 / (02) 635-3615',
// 							branchemail:'info.megamall@informatics.com.ph',
// 							programs:[
// 								{
                                    
//                                             name:'Corporate Learning Courses'
// 										},
// 										 {
//                                             name:'Short Courses'
										
//                                 }
// 							]
// 						},
						{
							id:11,
							name:'Festival Alabang',
							isActive:false,
							sliderlinks:[
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/alabang.jpg',
								isActive: true},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/alabang.jpg',
								isActive: false},
								{link:'https://www.informatics.edu.ph/wp-content/uploads/2019/01/alabang.jpg',
								isActive: false}
							],
							branchaddress:'4th Level Festival Supermall, Filinvest Corporate City Alabang, Muntinlupa City',
							branchnumber:'02 771-0401',
							branchemail:'informaticsalabang@gmail.com',
							programs:[
								{
                                    name:'Senior High School (SHS)',
                                    courses:[
                                        {
                                           
											name:'Information Communications and Technology Strand (ICT)',
											href:'/programs/senior-high-school-tracks/'
												},
												{
												name:'Accounting and Business Management Strand (ABM)',
												href:'/programs/senior-high-school-tracks/'
												
										}
                                    ]
                                },
								{
                                         name:'Corporate Learning Courses'
									},
								{
                                       name:'Short Courses'
								}
							]
						}
					]
				}
			},
			 mounted() {
				var $ = jQuery
				$($('.put-contact')[0]).html('<?php echo do_shortcode('[wpforms id="1935" title="false" description="false"]'); ?>');
				$($('.put-contact')[1]).html('<?php echo do_shortcode('[wpforms id="1936" title="false" description="false"]'); ?>');
				 $($('.put-contact')[2]).html('<?php echo do_shortcode('[wpforms id="1937" title="false" description="false"]'); ?>');
				 $($('.put-contact')[3]).html('<?php echo do_shortcode('[wpforms id="1938" title="false" description="false"]'); ?>');
				 $($('.put-contact')[4]).html('<?php echo do_shortcode('[wpforms id="1939" title="false" description="false"]'); ?>');
				 $($('.put-contact')[5]).html('<?php echo do_shortcode('[wpforms id="1940" title="false" description="false"]'); ?>');
 				
				 
				 $($('.put-contact-2')[0]).html('<?php echo do_shortcode('[wpforms id="1941" title="false" description="false"]'); ?>');
				 $($('.put-contact-2')[1]).html('<?php echo do_shortcode('[wpforms id="1942" title="false" description="false"]'); ?>');
				 $($('.put-contact-2')[2]).html('<?php echo do_shortcode('[wpforms id="1943" title="false" description="false"]'); ?>');
				 $($('.put-contact-2')[3]).html('<?php echo do_shortcode('[wpforms id="1944" title="false" description="false"]'); ?>');
				 $($('.put-contact-2')[4]).html('<?php echo do_shortcode('[wpforms id="1945" title="false" description="false"]'); ?>');
				
				 var self = this;
				 for(var i = 0; i<$('.cursor-pointer').length; i++){
					this.offsets[i] = $($('.cursor-pointer')[i]).offset().top;
				 }
				 $('.program-form').submit(function(e){
					e.preventDefault();
					var my_user = {
						sender_email: $(this).find('.user-email').val(),
						receipient_email: $(this).find('.user-hide').val(),
						sender_name:'Unknown',
						message: $(this).find('.user-message').val()
					};
					alert("Message SuccessFully Send");
					$(this).find('.user-email').val("");
					$(this).find('.user-message').val("");
				
					fetch('https://system.informatics-inculab.com/api/inquiry',{
						method: 'POST',
						body: JSON.stringify(my_user),
						mode:'cors',
						headers:{
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						}
					}).then((response)=>{
					return response.json();
					}).then((myJson)=>{
			
					}).catch((error)=>{
						console.log(error)
					})
				})
			 },
			methods:{
				clicked(branch,event,index){
					var $ = jQuery
					var setHeight = $('.beforedrop#branch-'+branch.id+' .dropdown-height')[0].clientHeight;
					if(this.branched != branch){
						this.branched = branch;
						this.unclicked(branch)
						$($('.beforedrop')[index]).css({height:setHeight});
						$('html,body').animate({scrollTop:this.offsets[index] - 50})
					}else{
						this.branched = '';
						this.unclicked(branch)
					}
					branch.isActive = !branch.isActives
				},
				clickedInstitute(branch,index){
					var $ = jQuery
					var setHeight = $('.beforedrop#branch-'+branch.id+' .dropdown-height')[0].clientHeight;
					if(this.branched != branch){
					this.branched = branch;
					this.unclicked(branch)
					$($('.beforedrop')[index+6]).css({height:setHeight})
					$('html,body').animate({scrollTop:this.offsets[index+6] - 50})
					}else{
						this.branched = '';
						this.unclicked(branch)
					}
					branch.isActive = !branch.isActives
				},
				unclicked(bran){
					var $ = jQuery
					$('.beforedrop').css({height:'0px'});
					this.branches.forEach(branch=>{
						if(branch!=bran){
							branch.isActive = false;
						}
					})
					this.institutes.forEach(branch=>{
						if(branch!=bran){
							branch.isActive = false;
						}
					})
				}

		    }
		})
	})();
</script>
<?php
get_footer();
