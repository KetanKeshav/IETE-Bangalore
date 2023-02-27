<!DOCTYPE html>
<html lang="en">
<?php $page = 'awards'; ?>

<head>
    <meta charset="utf-8">
    <title>Awards | IETE Bangalore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include 'include/navbar.php'; ?>

            <div class="container-xxl py-5 bg-primary mb-5">
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Awards</h6>
                    <h2 class="mt-2">Awards</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Presidents from Bangalore</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Prof. K Srinivasan </td>
                                        <td>1956-1957</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sri. B V Baliga</td>
                                        <td>1957-1958</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Prof. S V C Aiya</td>
                                        <td>1959-1960</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Col. B K Rai </td>
                                        <td>1982-1984</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Sri. K Thomas</td>
                                        <td>1984-1986</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Prof. B S Sonde</td>
                                        <td>1992-1994</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Dr.Surendrapal</td>
                                        <td>2012-2014</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>

                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Honorary Fellows (HF) From Bangalore</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Prof. K SatishDhawan</td>
                                        <td>1984</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Prof. C N R Rao</td>
                                        <td>1987</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Dr. V S Arunachalam</td>
                                        <td>1991</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sri. AzimPremji</td>
                                        <td>2000</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Prof. V S Ramamurthy</td>
                                        <td>2002</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Sri. G Madhavan Nair</td>
                                        <td>2007</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Sri. N R Narayana Murthy</td>
                                        <td>2008</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Dr. K Radhakrishnan</td>
                                        <td>2010</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Sri. A S Kirna Kumar</td>
                                        <td>2016</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Sri. Kris Gopalkrishnan</td>
                                        <td>2016</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Dr. K Sivan </td>
                                        <td>2018</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>

                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Distinguished Fellows (DF) From Bangalore</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Prof. K Sreenivasan</td>
                                        <td>1960 - 61</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Prof. S V C Aiya</td>
                                        <td>1962 - 63</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sri. B V Baliga</td>
                                        <td>1963 - 64</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sri. T V Ramamurthy</td>
                                        <td>1967 - 68</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Sri. SS Aiyer</td>
                                        <td>1968 - 69</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Sri. N V Shenoi</td>
                                        <td>1971 - 72</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Sri. T V Srirangan</td>
                                        <td>1977 - 78</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Sri. T R Subramanyam</td>
                                        <td>1978 - 79</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Prof. S Sampath</td>
                                        <td>1978 - 79</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Prof . P V Indiresan</td>
                                        <td>1980 - 81</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Sri. B K Rai </td>
                                        <td>1981 - 82</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Prof. B S Sonde </td>
                                        <td>1983 - 84</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Prof. U R Rao</td>
                                        <td>1984 - 85</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Sri. Thomas Kora</td>
                                        <td>1984 - 85</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">15</th>
                                        <td>Sri. K P PNambiar</td>
                                        <td>1985 - 86</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">16</th>
                                        <td>Dr. K Kasturirangan</td>
                                        <td>1994 - 95</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">17</th>
                                        <td>Prof.BharatiBhat </td>
                                        <td>1996 - 97</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">18</th>
                                        <td>Dr. R P Shenoy</td>
                                        <td>1998 - 99</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">19</th>
                                        <td>Dr. S Pal </td>
                                        <td>1999 - 00</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">20</th>
                                        <td>Dr. K Aatre</td>
                                        <td>2001 - 02</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">21</th>
                                        <td>Prof. A Kumar</td>
                                        <td>2003 - 04</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">22</th>
                                        <td>Dr. M G Chandrasekhar</td>
                                        <td>2006 - 07</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">23</th>
                                        <td>Sri. A Bhaskaranarayana</td>
                                        <td>2010 - 11</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">24</th>
                                        <td>Dr. M H Kori </td>
                                        <td>2017 – 18</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>

                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Chairman’s of IETE Bangalore</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Prof. S V C Aiya</td>
                                        <td>1960 - 61</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sri. S K Kanjilal</td>
                                        <td>1961 – 62</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sri. N V Shenoi</td>
                                        <td>1963 – 65</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sri. C R Subramanian</td>
                                        <td>1965 – 66</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Brig. B J Shahaney/
                                            Sri .G U Menon
                                        </td>
                                        <td>1966 – 67</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Col. D Swaroop </td>
                                        <td>1967 – 68</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Brig. S K Malhatra</td>
                                        <td>1968 – 70</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Brig. B Bhasin</td>
                                        <td>1970 – 72</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Sri. D K Sachdev</td>
                                        <td>1972 – 74</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Brig. N Dayal </td>
                                        <td>1974 – 76</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Prof. B S Sonde</td>
                                        <td>1976 – 78</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Sri. U V Nayak</td>
                                        <td>1978 –79 </td>
                                    </tr>


                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Sri. U V Nayak/
                                            Prof. B S Sonde
                                        </td>
                                        <td>1979 – 80</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Brig. R C Dhingra </td>
                                        <td>1980 – 81</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">15</th>
                                        <td>Brig. R C Dhingra/
                                            Dr. R P Shenoy
                                        </td>
                                        <td>1981 – 82</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">16</th>
                                        <td>Dr. R P Shenoy</td>
                                        <td>1982 – 83</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">17</th>
                                        <td>Sri. K Swaminathan/
                                            Dr. R P Shenoy
                                        </td>
                                        <td>1983 – 84</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">18</th>
                                        <td>Dr. S Srikantan</td>
                                        <td>1984 – 86</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">19</th>
                                        <td>Sri. G T Narayan /
                                            Sri. R Somasundaram
                                        </td>
                                        <td>1986 – 87</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">20</th>
                                        <td>Prof. A Kumar</td>
                                        <td>1987 – 89</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">21</th>
                                        <td>Wg. Cdr. C P K Menon</td>
                                        <td>1989 – 91</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">22</th>
                                        <td>Sri. A KSrivastav </td>
                                        <td>1991 – 93</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">23</th>
                                        <td>Sri. Desikamani</td>
                                        <td>1993 – 94</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">24</th>
                                        <td>Sri. M G Chandrasekhar</td>
                                        <td>1994 – 96</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">25</th>
                                        <td>Sri. P Kailasnath</td>
                                        <td>1996 – 98</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">26</th>
                                        <td>Dr. M H Kori </td>
                                        <td>1998 – 00</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">27</th>
                                        <td> Wg. Cdr. R N Rao </td>
                                        <td>2000 – 01</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">28</th>
                                        <td>Dr. K soundararajan</td>
                                        <td>2001 – 04</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">29</th>
                                        <td>Prof. C murali</td>
                                        <td>2004 – 06</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">30</th>
                                        <td>Sri. G R Joshi</td>
                                        <td>2006 – 08</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">31</th>
                                        <td>Sri. R LakshminarayanaRao</td>
                                        <td>2008 -10</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">32</th>
                                        <td>Wg. Cdr. H RParthasarathy</td>
                                        <td>2010 – 12</td>
                                    </tr>


                                    <tr>
                                        <th scope="row">33</th>
                                        <td>Sri. D Rajagopal</td>
                                        <td>2012 – 14</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">34</th>
                                        <td>Dr. D C Pande</td>
                                        <td>2014 – 16</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">35</th>
                                        <td>Sri. G Ramesh</td>
                                        <td>2016 – 18</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">36</th>
                                        <td>Prof. H S Bhatia</td>
                                        <td>2018 – 20</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                        </div>

                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Best Centre Awards</h2>
                        </div>
                        <h4>
                            <b>IETE Bangalore</b> Centre is one of the Best Centres, Received the Best Centre Awards consecutively 4 years
                        </h4><br>
                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE Special Award for Outstanding Performance : 1996-97</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE Best Performing Centre Awards : 1997-98 : 1998-99
                                1999-2000 : 2000-01 </li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Outstanding Achievement Awards</h2>
                        </div>

                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - IRSI (83) Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - B R Batra Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Prof. SVC Aiya Memorial Award</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Best Paper Awards</h2>
                        </div>

                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - S K Mitra Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - J C Bose Memorial Award</li>
                        </ul>
                        <h4>
                            Best Student Performance Awards
                        </h4>
                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> AMIETE Council Prize I to III</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> DIPIETE Council Prize I to V</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">IETE AWARDS 2003-04</h2>
                        </div>

                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> 11TH IETE - PROF. K SRINIVASAN MEMORIAL AWARD :<br>Awardee : Dr. Vikram M Gadre</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> 8TH IETE - Prof. SVC Aiya Memorial Award :<br>Awaedee : Prof. T S Rathore</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> 3rd IETE- N V Gadadhar Memorial Award :<br>Awardee : Lt.Col. P R Menon</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> 2nd IETE - B R Batra Memorial Award :<br>Awardees : Jointly awarded to Sri. D Rajagopal and Dr. Samarjit Sengupta</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">IETE AWARDS:</h2>
                        </div>
                        <p>
                            The Institution of Electronics and Telecommunication Engineers (IETE) recognizes, through its coveted annual/biennial awards, outstanding achievements amongst its members and other professionals in the broad areas of electronics, telecommunications, computers, information technology and related disciplines.
                        </p>
                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Ram Lal Wadhwa Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Hari Ramji Toshniwal Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Bimal Bose Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Lal C Verman Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - IRSI (83) Awards</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">MAIN IETE - IRSI (83):</h2>
                        </div>
                        <p>
                            The award consists of a cash prize of Rs.20,000/-, a citation and a travel grant of Rs.10,000/- for one awardee to travel to at least three IETE Centres for delivering lectures on the work that qualified for the award.
                        </p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">IETE - IRSI (83) Young Scientist Award:</h2>
                        </div>
                        <p>
                            The young scientist award (upper age limit 35 years) consists of a cash prize of Rs.10,000/- and a citation.
                        </p>
                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Flt Lt Tanmaya Singh Dandass Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Prof K Sreenivasan Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Prof SVC Aiya Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Prof S N Mitra Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE – CEOT (94) Award (Biennial)</li>

                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - B V Baliga Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - N V Gadadhar Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - B R Batra Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - R S Khandpur Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - R S Khandpur Award</li>


                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE – Brig M L Anand Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE - Biman Behari Sen Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE-Lifetime Achievement Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE- Smt. Manorama Rathore Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE- Smt Ranjana Pal Memorial Award</li>



                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE-Smt Triveni Devi Gupta Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE-Technomedia Award for Young Women in Engineering</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE- Shri Devi Singh Tyagi Memorial Award</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> IETE-Shri P P Malhotra Memorial Award</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">NOMINATION CRITERIA:</h2>
                        </div>
                        <ul style="font-size: 20px;">
                            <li>
                                <p>The awards are generally open to Indian nationals for their work done in India.</p>
                            </li>

                            <li>
                                <p>The nominators and nominees need not be members of IETE, that means all the Awards are open to everyone except
                                    IETE – B R Batra Memorial Award (Sl.No.13 of the Annexure) and IETE Technomedia Award for Young Women in Engineering (Sl No 21 of enclosed Annexure) )
                                    and IETE- Shri P P Malhotra Memorial Award (Sl.No.23 of enclosed Annexure). </p>
                            </li>

                            <li>
                                <p>There is no age limit for these awards, except in the cases of IETE – IRSI (83) Young scientist award with the upper age limit of 35 years;
                                    IETE Technomedia Award for Young Women in Engineering, where age should not be more than 50 years AND for IETE Life Time Achievement Award where the age should be 70 years or above. </p>
                            </li>

                            <li>
                                <p>The contributions and achievements of the nominee should have the potential of significant impact on the future developments
                                    in India in the respective fields recognized for the award. </p>
                            </li>

                            <li>
                                <p>The nominee should have demonstrated potential for creative output and should not have received any award for that work earlier.
                                    Also, nominee should not have received any of the IETE awards during the last 3 years. </p>
                            </li>

                            <li>
                                <p>No self-nomination will be considered. </p>
                            </li>

                            <li>
                                <p>Sitting Governing Council Members and expert jury members are not eligible for any IETE Awards. </p>
                            </li>

                            <li>
                                <p>One nominator should not nominate more than one nominee for the same IETE award. However,
                                    one nominator can nominate more than one nominee for different IETE awards. </p>
                            </li>

                            <li>
                                <p>One nominee shall not be given more than one IETE award in a year. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">NOMINATION PROCEDURE AND SUBMISSION:</h2>
                        </div>
                        <ul style="font-size: 20px;">
                            <li>
                                <p>Nominations can to be made by: Heads of Institutions/Organisations/Departments,
                                    IETE Honorary/Distinguished Fellows/Past Presidents/Governing Council Members/ Fellows
                                    for 10 years or more and Organisational Members (Except in IETE-B R Batra Memorial Award Sl No .13).</p>
                            </li>

                            <li>
                                <p>Members of “External Jury of Experts” and the “Board of Awards” cannot nominate individuals for IETE awards including IRSI awards. Also,
                                    a nominator should not be a member/expert of any Selection or Evaluation Committee for that Award. </p>
                            </li>

                            <li>
                                <p>“Call for Nominations” for the Awards is published every year in the Nov-Dec and Jan-Feb issues of
                                    IETE Journal of Research and IETE Technical Review and is also made available on IETE website, http://www.iete.org (see home page – AWARDS). </p>
                            </li>

                            <li>
                                <p>Nominations should be made only in the prescribed Nomination Form available on IETE website: http//www.iete.org, freely downloadable
                                    and all the statements must be concise and confined to the allotted space only. </p>
                            </li>

                            <li>
                                <p>A proposed ‘Citation’ (limited to 30 words only) should be included in the Nomination Form at the appropriate place.
                                    Absence of this Citation may disqualify the nomination. </p>
                            </li>
                        </ul>
                        <h4><b>Please click here for more details:</b>  <a href="http://iete.org/Call%20for%20Nomination%20Main%20Awards-2020.pdf" target="_blank">Click Here</a> </h4>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Best Centre Awards</h2>
                        </div>
                        <p>
                            IETE Bangalore Centre is one of the Best Centres, Received the Best Centre Awards consecutively 12 years
                        </p>
                        <ul style="list-style-type: none; font-size: 20px;">
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> Special Award for Outstanding Performance : 1996-97</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> Best Centre Awards: 1997, 1999, 1999, 2001, 2003, 2005, 2007, 2010, 2012, 2014, 2016, 2018</li>
                            <li><span><i class="fa fa-trophy" style="color:blue;"></i></span> Second Best Centre Awards: 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>

<!-- <i class="fa fa-trophy" style="color:blue;" aria-hidden="true"></i> -->