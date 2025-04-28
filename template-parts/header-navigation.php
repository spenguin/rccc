<?php
/**
 * Navigation
 */
?>
    <section class="navigation">
        <h3>Navigation</h3>
        <div class="navigation--wrapper hidden">
            <div class="navigation--list">
                <?php 
                    if( !is_home() && !is_front_page() )
                    {   ?>
                        <a href="/">Home</a>
                        <?php
                    } 
                ?>
                <!-- <a href="">About Rain City Comicon</a> -->
                <a href="">The Organisers</a>
                <a href="">Panels</a>
                <a href="/statement-of-purpose">Statement of Purpose</a>
                <a href="/code-of-conduct">Code of Conduct</a>
                <a href="">Exhibitors</a>
            </div>
        </div>
    </section>