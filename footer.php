<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="inner">
			<div id="pre-footer">
        	<ul id="quick_links">
            	<li class="quick_links_list">
                	<ul>
                    	<li class="quick_links_list_title">Students</li>
                        <li><a href="https://learnuw.wisc.edu/" title="Learn@UW">Learn@UW</a></li>
                        <li><a href="https://courses.cals.wisc.edu/cals/" title="CALS Course Pages">Course Pages</a></li>
                        
                        <li><a href="/students/undergraduate-programs/advising/" title="Advising">Advising</a></li>
                        <li><a href="/students/undergraduate-programs/financial-aid/" title="Financial Aid">Financial Aid</a></li>
                        <li><a href="/students/undergraduate-programs/ups-office/">Undergraduate Programs &amp; Services</a></li>
                        
                        <li><a href="http://www.cals.wisc.edu/gradstudies/" title="Graduate Studies">Graduate Studies</a></li>
                        <li><a href="/students/undergraduate-programs/career-development/" title="Career Services">CALS Career Services</a></li>
                	
                      <li><a href="https://cals-wisc-csm.symplicity.com/students/" title="BuckyNet">BuckyNet</a></li>
                    </ul>
       	      </li>
            	<li class="quick_links_list">
                	<ul>
                    	<li class="quick_links_list_title">Alumni &amp; Friends</li>
                        <li><a href="/alumni-friends/get-involved/" title="Get Involved">Get Involved</a></li>
                        <li><a href="/alumni-friends/enhance-your-career/" title="Enhance Your Career">Enhance Your Career</a></li>
                        <li><a href="http://www.supportuw.org/making-a-gift/school-college/cals/" title="Give to CALS">Give to CALS</a></li>
                        <li><a href="http://www.today.wisc.edu/" title="Campus Events">Campus Events</a></li>
                        <li><a href="http://cals.wisc.edu/grow/" title="Grow Magazine">Grow Magazine</a></li>
                        <li><a href="http://www.uwalumni.com/" title="Wisconsin Alumni Association">WAA</a></li>
                        <li><a href="http://walsaa.org/" title="Wisconsin Agriculture and Life Sciences Alumni Association">WALSAA</a></li>
                        <li><a href="http://www.uwbadgers.com/" title="UW Athletics">UW Athletics</a></li>
                    </ul>
            </li>
            	<li class="quick_links_list">
            	  <ul>
            	    <li class="quick_links_list_title">Industry &amp; Community</li>
            	    <li><a href="/industry-community/get-help/find-a-expert/" title="Find an Expert">Find an Expert</a></li>
            	    <li><a href="/industry-community/training-and-professional-development/" title="Training and Professional Development">Training and Professional Development</a></li>
            	    <li><a href="/industry-community/research-partnerships/" title="Research Partnerships">Research Partnerships</a></li>
            	    <li><a href="/students/undergraduate-programs/career-development/" title="CALS Career Services">CALS Career Services</a></li>
            	    <li><a href="http://fisc.cals.wisc.edu/" title="Farm and Industry Short Course">Farm and Industry Short Course</a></li>
            	    <li><a href="http://www.uwex.edu/" title="UW-Extension">UW-Extension</a></li>
            	    <li><a href="http://www.ocr.wisc.edu/" title="Office of Corporate Relations">Office of Corporate Relations</a></li>
            	    <li><a href="http://www.warf.org/index.jsp" title="WARF">WARF</a></li>
          	    </ul>
          	    </li>
            	<li class="quick_links_list">
                	<ul>
                    	<li class="quick_links_list_title">Faculty &amp; Staff</li>
                        <li><a href="http://ecals.cals.wisc.edu/">eCALS</a></li>
                        <li><a href="/contact/cals-directory/" title="CALS Directory Search">Directory Search</a></li>
                        <li><a href="/academics/departments/" title="CALS Departments">Departments</a></li>
                        <li><a href="http://www.cals.wisc.edu/students/Advising/" title="Advising">Advising</a></li>
                        <li><a href="http://www.cals.wisc.edu/HR/" title="Human Resources">Human Resources</a></li>
                        <li><a href="http://www.cals.wisc.edu/bussvc/" title="CALS Business Services">Business Services</a></li>
                        <li><a href="/about-cals/research-centers/" title="CALS Research Centers">Research Centers</a></li>
                        <li><a href="http://www.cals.wisc.edu/research/" title="Research Division">Research Division</a></li>
                    </ul>
                </li>                                
            </ul>
            <div class="clearfix"></div>
        </div>
        
        <div class="copyright">
        	<div>&copy;Copyright 2013. All rights reserved. College of Agricultural and Life Sciences - University of Wisconsin-Madison.</div>
	        <img src="<?php echo get_template_directory_uri(); ?>/images/uwcrest_footer.png" alt="University of Wisconsin Madison" align="center" />
        </div>
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with four columns of widgets.
				 */
				
					get_sidebar( 'footer' );
			?>
		</div>
			
	</footer><!-- #colophon -->
</div><!-- #page -->


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/scripts/main.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>