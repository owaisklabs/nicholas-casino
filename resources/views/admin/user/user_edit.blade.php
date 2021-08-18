@csrf
 <div class="modal-body">
    <div class="container-fluid topMain">
        
        <div class="container-fluid text-center adminNDB">
            <div class="row">
            </div>
            <div class="row">
                
                <div class="">
                    <nav class="nav nav-pills mt1">
                        <a class="nav-link active" id="Profile" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Profile</a>
                        <a class="nav-link " id="Info" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Info</a>
                        <a class="nav-link " id="kickingcoach" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">kicking long snapping coach</a>
                        <a class="nav-link " id="STARRATINGS" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">STAR RATINGS</a>
                        <a class="nav-link " id="seasonstats" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">season stats</a>
                        <a class="nav-link" id="VIDEOS" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="true">VIDEOS</a>
                    </nav>
                </div>
                    <div class="col-lg-12">
                        <div class="tab-content mt5">
                            
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="Profile">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>
                                                Profile
                                            </h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <div class="img-picker"><div class="">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt1 dflowx">
                        
                        <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                        <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                        <img src="https://designprosca.com/NSD/public/img/1x/dim-starhalf-8.png" style="height:20px; width: 20px;" alt="">
                        <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                        <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="row">
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">First Name</label>
                            <input type="text" placeholder="First Name" name="name" class="name">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Last Name</label>
                            <input type="text" placeholder="Last Name" name="last_name" class="last_name">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Position</label>
                            <input type="text" placeholder="Position" readonly="" value="Kicker, Long Snapper.">
                        </div>
                    </div>
                    <div class="row ">
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Username</label>
                            <input type="text" placeholder="Username" name="user_name" class="user_name">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Email</label>
                            <input type="email" placeholder="Email" readonly=""  name="email" class="email">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Subcription</label>
                            <input type="text" placeholder="Monthly" readonly="" name="package_id" class="package_name">
                        </div>
                    </div>
                    <div class="row ">
                        
                        <div class="col-lg-12 mt3">
                            <label for="" class="clabel">About Me</label>
                            <textarea name="description" cols="30" rows="5" placeholder="About Me" class="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="Info">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Info
                    </h2>
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Twitter Handle</label>
                            <input type="text" placeholder="Twitter Handle" name="twitter_handle" class="twitter_handle">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Instagram Handle</label>
                            <input type="text" placeholder="Instagram Handle" name="instagram_handle" name="instagram_handle">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Jersey #</label>
                            <input type="number" placeholder="Jersey #" name="jersey_number" class="jersey_number">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Specialist Position</label>
                            <input type="text" placeholder="Specialist Position" name="specialist_position" class="specialist_position">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Grad Year</label>
                            <select name="grad_year" id="yearButton" class="grad_year">
                                <option value="">Grad Year</option>
                                1901
                                2036
                                <option value="2036">2036</option>
                                <option value="2035">2035</option>
                                <option value="2034">2034</option>
                                <option value="2033">2033</option>
                                <option value="2032">2032</option>
                                <option value="2031">2031</option>
                                <option value="2030">2030</option>
                                <option value="2029">2029</option>
                                <option value="2028">2028</option>
                                <option value="2027">2027</option>
                                <option value="2026">2026</option>
                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020" selected="">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                            </select>
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">State</label>
                            <input type="text" placeholder="State" name="state" value="kentucky">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">High School</label>
                            <input type="text" placeholder="High School" name="high_school" value="abc school">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Height</label>
                            <input type="number" step="0.01" placeholder="Height" name="height" value="5.50">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Weight</label>
                            <input type="number" step="0.01" placeholder="Weight" name="weight" value="88.10">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Other FB Positions</label>
                            <input type="text" placeholder="Other FB Positions" name="other_fb_positions" value="lb, rw, rb">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Other Sports</label>
                            <input type="text" placeholder="Other Sports" name="other_sports" value="basketball, soccer">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">College Degrees of Interest</label>
                            <input type="text" placeholder="College Degrees of Interest" name="college_degrees_of_interest" value="psy">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">GPA</label>
                            <input type="number" step="0.01" placeholder="GPA" name="gpa" value="2.80">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">ACT</label>
                            <input type="number" step="0.01" placeholder="ACT" name="act" value="4.00">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">SAT</label>
                            <input type="number" step="0.01" placeholder="SAT" name="sat" value="4.00">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12 ">
                    
                    <div class="row">
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">NCAA ID</label>
                            <input type="text" placeholder="NCAA ID" name="ncaa_id" value="13213">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Class Rank</label>
                            <input type="number" placeholder="Class Rank" name="class_rank" value="4">
                        </div>
                        
                        <div class="col-lg-4 mt3">
                            <label for="" class="clabel">Class Rank Percentile</label>
                            <input type="number" step="0.01" placeholder="Class Rank Percentile" name="class_rank_percentile" value="44.44">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="kickingcoach">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        Coaches
                    </h2>
                </div>
                
                <div class="col-lg-12 mt3">
                    <label for="" class="clabel">Coach 01</label>
                    <input type="text" placeholder="Coach 01" name="coach1" value="coach 1">
                </div>
                
                <div class="col-lg-12 mt3">
                    <label for="" class="clabel">Coach 02</label>
                    <input type="text" placeholder="Coach 02" name="coach2" value="coach 2">
                </div>
                
                <div class="col-lg-12 mt3">
                    <label for="" class="clabel">Coach 03</label>
                    <input type="text" placeholder="Coach 03" name="coach3" value="coach 3">
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="STARRATINGS">
        <div class="card">
            <div class="row">
                <div class="col-lg-12 dfl">
                    <h2>
                        Average Ratings
                    </h2>
                </div>
                <div class="col-lg-12 text-left">
                    <p class="avgRate">
                        This is an average score of all of your evaluation camp ratings.
                    </p>
                </div>
                <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                    <table class="table table-striped mt5">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">List</th>
                                <th class="text-center" scope="col">Evaluation Platforms</th>
                                <th class="text-center" scope="col">Last Attend</th>
                                <th class="text-center" scope="col">Rating</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody_star_rating">
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    FCBarcelona
                                </td>
                                <td>2021-05-04</td>
                                <td>
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_star_rating" data-id="1"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="1"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    Ajax Amsterdam
                                </td>
                                <td>2021-05-04</td>
                                <td>
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_star_rating" data-id="2"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="2"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    Real Madrid C F
                                </td>
                                <td>2021-05-01</td>
                                <td>
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/dim-starhalf-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                                    <img src="https://designprosca.com/NSD/public/img/1x/dim-starfull-8.png" style="height:20px; width: 20px;" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_star_rating" data-id="3"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="3"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="seasonstats">
        <div class="card">
            <div class="row">
                
                <div class="staesTabs">
                    
                            <!-- <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#seniorTab">SENIOR STATS</a></li>
                            <li><a data-toggle="tab" href="#juniorTab">JUNIOR STATS</a></li>
                            <li><a data-toggle="tab" href="#sophomoreTab">SOPHOMORE YEAR</a></li>
                            <li><a data-toggle="tab" href="#freshmanTab">FRESHMAN YEAR</a></li>
                            <li><a data-toggle="tab" href="#juniorDaysTab">JUNIOR DAYS</a></li>
                            <li><a data-toggle="tab" href="#offersTab">OFFERS</a></li>
                        </ul> -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="seniorTab-tab" data-toggle="tab" href="#seniorTab" role="tab" aria-controls="home" aria-selected="true">SENIOR STATS</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="juniorTab-tab" data-toggle="tab" href="#juniorTab" role="tab" aria-controls="profile" aria-selected="false">JUNIOR STATS</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="sophomoreTab-tab" data-toggle="tab" href="#sophomoreTab" role="tab" aria-controls="contact" aria-selected="false">SOPHOMORE YEAR</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="freshmanTab-tab" data-toggle="tab" href="#freshmanTab" role="tab" aria-controls="contact" aria-selected="false">FRESHMAN YEAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="juniorDaysTab-tab" data-toggle="tab" href="#juniorDaysTab" role="tab" aria-controls="contact" aria-selected="false">JUNIOR DAYS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="offersTab-tab" data-toggle="tab" href="#offersTab" role="tab" aria-controls="contact" aria-selected="false">OFFERS</a>
                        </li>
                    </ul>

                </div>
                
                <div class="tab-content">
                    
                    <div class="tab-pane fade show active" id="seniorTab" role="tabpanel" aria-labelledby="seniorTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                SENIOR STATS
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="staeSec">
                                <div class="col-lg-12 mt5 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>PAT’s :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="senior_pat_comment" id="" cols="30" rows="3" placeholder="Comments">pat comment</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>FG :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest</div> <input type="number" placeholder="" name="senior_fg_longest" value="200">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="senior_fg_comment" id="" cols="30" rows="3" placeholder="Comments">asd</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>KO's :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Ko's</div> <input type="number" placeholder="" name="senior_kos" value="44">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="senior_ko_total_yardage" value="21">
                                                </div>
                                                <div class="xforchild">
                                                    <div>KO Average</div> <input type="number" placeholder="" name="senior_ko_average" value="42.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Touchbacks</div> <input type="number" placeholder="" name="senior_ko_touchbacks" value="12">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="senior_ko_comment" id="" cols="30" rows="3" placeholder="Comments">arc 32</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>Punts :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Punts</div> <input type="number" placeholder="" name="senior_punts" value="12">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Punts Average</div> <input type="number" placeholder="" name="senior_punt_average" value="34.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest Punts</div> <input type="number" placeholder="" name="senior_longest_punt" value="231">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="senior_punt_total_yardage" value="23">
                                                </div>
                                                <div class="xforchild">
                                                    <div>1-20</div> <input type="number" placeholder="" name="senior_punt_120" value="2">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="senior_punt_comment" id="" cols="30" rows="3" placeholder="Comments">sdff</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12  mt5 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>40 Yard Dash :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <input type="number" placeholder="" name="senior_40_yard_dash" value="231">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>PAT Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="senior_pat_snaps" value="12">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="senior_perfect_pat_snaps" value="23.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>Punt Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="senior_punt_snaps" value="23">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="senior_perfect_punt_snaps" value="32.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="juniorTab" role="tabpanel" aria-labelledby="juniorTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                JUNIOR STATS
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="staeSec">
                                <div class="col-lg-12 mt5 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>PAT’s :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="junior_pat_comment" id="" cols="30" rows="3" placeholder="Comments">asdasdas</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>FG :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest</div> <input type="number" placeholder="" name="junior_fg_longest" value="12">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="junior_fg_comment" id="" cols="30" rows="3" placeholder="Comments">asd</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>KO's :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Ko's</div> <input type="number" placeholder="" name="junior_kos" value="23">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="junior_ko_total_yardage" value="341">
                                                </div>
                                                <div class="xforchild">
                                                    <div>KO Average</div> <input type="number" placeholder="" name="junior_ko_average" value="231.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Touchbacks</div> <input type="number" placeholder="" name="junior_ko_touchbacks" value="231">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="junior_ko_comment" id="" cols="30" rows="3" placeholder="Comments">dfa</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>Punts :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Punts</div> <input type="number" placeholder="" name="junior_punts" value="231">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Punts Average</div> <input type="number" placeholder="" name="junior_punt_average" value="231.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest Punts</div> <input type="number" placeholder="" name="junior_longest_punt" value="231">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="junior_punt_total_yardage" value="34">
                                                </div>
                                                <div class="xforchild">
                                                    <div>1-20</div> <input type="number" placeholder="" name="junior_punt_120" value="453">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="junior_punt_comment" id="" cols="30" rows="3" placeholder="Comments">sdffqwdf</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12  mt5 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>40 Yard Dash :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <input type="number" placeholder="" name="junior_40_yard_dash" value="342">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>PAT Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="junior_pat_snaps" value="21">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="junior_perfect_pat_snaps" value="431.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>Punt Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="junior_punt_snaps" value="231">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="junior_perfect_punt_snaps" value="23.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="sophomoreTab" role="tabpanel" aria-labelledby="sophomoreTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                SOPHOMORE YEAR
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="staeSec">
                                <div class="col-lg-12 mt5 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>PAT’s :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="sophomore_pat_comment" id="" cols="30" rows="3" placeholder="Comments">asdawds</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>FG :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest</div> <input type="number" placeholder="" name="sophomore_fg_longest" value="2">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="sophomore_fg_comment" id="" cols="30" rows="3" placeholder="Comments">uhb</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>KO's :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Ko's</div> <input type="number" placeholder="" name="sophomore_kos" value="2">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="sophomore_ko_total_yardage" value="78">
                                                </div>
                                                <div class="xforchild">
                                                    <div>KO Average</div> <input type="number" placeholder="" name="sophomore_ko_average" value="7.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Touchbacks</div> <input type="number" placeholder="" name="sophomore_ko_touchbacks" value="7">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="sophomore_ko_comment" id="" cols="30" rows="3" placeholder="Comments">fadhugn</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>Punts :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Punts</div> <input type="number" placeholder="" name="sophomore_punts" value="276">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Punts Average</div> <input type="number" placeholder="" name="sophomore_punt_average" value="27.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest Punts</div> <input type="number" placeholder="" name="sophomore_longest_punt" value="72">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="sophomore_punt_total_yardage" value="8">
                                                </div>
                                                <div class="xforchild">
                                                    <div>1-20</div> <input type="number" placeholder="" name="sophomore_punt_120" value="82">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="sophomore_punt_comment" id="" cols="30" rows="3" placeholder="Comments">asdbf</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12  mt5 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>40 Yard Dash :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <input type="number" placeholder="" name="sophomore_40_yard_dash" value="31">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>PAT Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="sophomore_pat_snaps" value="23">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="sophomore_perfect_pat_snaps" value="43.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>Punt Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="sophomore_punt_snaps" value="21">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="sophomore_perfect_punt_snaps" value="22.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="freshmanTab" role="tabpanel" aria-labelledby="freshmanTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                FRESHMAN YEAR
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="staeSec">
                                <div class="col-lg-12 mt5 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>PAT’s :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="freshman_pat_comment" id="" cols="30" rows="3" placeholder="Comments">asdasd</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>FG :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    X For X
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest</div> <input type="number" placeholder="" name="freshman_fg_longest" value="7">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="freshman_fg_comment" id="" cols="30" rows="3" placeholder="Comments">6aasd</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>KO's :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Ko's</div> <input type="number" placeholder="" name="freshman_kos" value="7">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="freshman_ko_total_yardage" value="76">
                                                </div>
                                                <div class="xforchild">
                                                    <div>KO Average</div> <input type="number" placeholder="" name="freshman_ko_average" value="87.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Touchbacks</div> <input type="number" placeholder="" name="freshman_ko_touchbacks" value="8">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="freshman_ko_comment" id="" cols="30" rows="3" placeholder="Comments">vghvdyqtfd</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left">
                                            <h5>Punts :</h5>
                                        </div>
                                        <div class="right">
                                            <div class="xforx">
                                                <div class="xforchild">
                                                    <div>No. of Punts</div> <input type="number" placeholder="" name="freshman_punts" value="7627">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Punts Average</div> <input type="number" placeholder="" name="freshman_punt_average" value="78.00">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Longest Punts</div> <input type="number" placeholder="" name="freshman_longest_punt" value="6">
                                                </div>
                                                <div class="xforchild">
                                                    <div>Total Yardage</div> <input type="number" placeholder="" name="freshman_punt_total_yardage" value="7">
                                                </div>
                                                <div class="xforchild">
                                                    <div>1-20</div> <input type="number" placeholder="" name="freshman_punt_120" value="76">
                                                </div>
                                            </div>
                                            <div class="inpSec mt-10">
                                                <textarea name="freshman_punt_comment" id="" cols="30" rows="3" placeholder="Comments">BJ GBRFU2</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12  mt5 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>40 Yard Dash :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <input type="number" placeholder="" name="freshman_40_yard_dash" value="123">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>PAT Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="freshman_pat_snaps" value="23">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="freshman_perfect_pat_snaps" value="23.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-10 smzp">
                                    <div class="jnone">
                                        <div class="left2">
                                            <h5>Punt Snaps :</h5>
                                        </div>
                                        <div class="right2">
                                            <div class="xforchild">
                                                <div>No. of Snaps</div> <input type="number" placeholder="" name="freshman_punt_snaps" value="13">
                                            </div>
                                            <div class="xforchild">
                                                <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="freshman_perfect_punt_snaps" value="56.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="juniorDaysTab" role="tabpanel" aria-labelledby="juniorDaysTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                JUNIOR DAYS
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="txtArea mt3">
                                <textarea name="junior_days1" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">nqui2 rh2387rh 28r7 h</textarea>
                            </div>
                            <div class="txtArea mt2">
                                <textarea name="junior_days2" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">b83ehxn2897ey</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="offersTab" role="tabpanel" aria-labelledby="offersTab-tab">
                        <div class="col-lg-12 dfl">
                            <h2>
                                OFFERS
                            </h2>
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-12">
                            <div class="txtArea mt3">
                                <textarea name="offers1" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">JFK</textarea>
                            </div>
                            <div class="txtArea mt2">
                                <textarea name="offers2" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">ABC</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="VIDEOS">
        <div class="card videost">
            <div class="row">
                <div class="col-lg-12 dfl">
                    <h2>
                        VIDEOS
                    </h2>
                </div>
                <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                    <table class="table table-striped mt5">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Title</th>
                                <th class="text-center" scope="col">Category</th>
                                <th class="text-center" scope="col">Link</th>
                                
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody_user_video">
                            <tr>
                                <th scope="row">8</th>
                                <td width="22%">
                                    asdadas
                                </td>
                                <td width="8%">HUDL</td>
                                <td width="33%">
                                    <a href="dasdasd" target="_blank">
                                        dasdasd
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_user_video" data-id="8"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn_delete_user_video" data-id="8"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td width="22%">
                                    Camp
                                </td>
                                <td width="8%">CAMP</td>
                                <td width="33%">
                                    <a href="1x12e12zw2" target="_blank">
                                        1x12e12zw2
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_user_video" data-id="9"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger btn_delete_user_video" data-id="9"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td width="22%">
                                    Training
                                </td>
                                <td width="8%">TRAINING</td>
                                <td width="33%">
                                    <a href="asdqm1io23je180" target="_blank">
                                        asdqm1io23je180
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn_edit_user_video" data-id="10"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger btn_delete_user_video" data-id="10"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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