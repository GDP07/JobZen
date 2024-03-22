<?php

include_once('./partials/header.php');
include_once('./controllers/conn.php');

?>

<div class="hero  small">
    <div class="darken"></div>

    <form action="job-listings.php" method="get">
        <div class="hero-input-wrapper">
            <div class="input-container with-drop-down">
                <input type="text" placeholder=" " id="location" class="dynamic-dropdown" name="location" autocomplete="off" value="<?php echo isset($_GET['location']) ? htmlspecialchars($_GET['location']) : ''; ?>">
                <label for="location">Location</label>
                <button class="clearButton" type="button" style="<?php echo !empty($_GET['location']) ? 'display: inline-block;' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                    </svg>
                </button>
                <ul class="drop-down-data">
                    <li data-value="0">Abilipitiya</li>
                    <li data-value="1">Ahangama</li>
                    <li data-value="2">Ahungalla</li>
                    <li data-value="3">Akkaraipattu</li>
                    <li data-value="4">Akurana</li>
                    <li data-value="5">Akuressa</li>
                    <li data-value="6">Alawwa</li>
                    <li data-value="7">Aluthgama</li>
                    <li data-value="8">Ambalangoda</li>
                    <li data-value="9">Ambalantota</li>
                    <li data-value="10">Ambuldeniya</li>
                    <li data-value="11">Ampara</li>
                    <li data-value="12">Angoda</li>
                    <li data-value="13">Anuradhapura</li>
                    <li data-value="14">Any location</li>
                    <li data-value="15">Aralaganwila</li>
                    <li data-value="16">Arangala</li>
                    <li data-value="17">Athurugiriya</li>
                    <li data-value="18">Attidiya</li>
                    <li data-value="19">Avissawella</li>
                    <li data-value="20">Baddegama</li>
                    <li data-value="21">Badulla</li>
                    <li data-value="22">Balagolla</li>
                    <li data-value="23">Balangoda</li>
                    <li data-value="24">Balapitiya</li>
                    <li data-value="25">Balummahara</li>
                    <li data-value="26">Bambalapitiya</li>
                    <li data-value="27">Bandaragama</li>
                    <li data-value="28">Bandarawela</li>
                    <li data-value="29">Batapola</li>
                    <li data-value="30">Battaramulla</li>
                    <li data-value="31">Batticaloa</li>
                    <li data-value="32">Beliatta</li>
                    <li data-value="33">Belihuloya</li>
                    <li data-value="34">Belummahara</li>
                    <li data-value="35">Bemmulla</li>
                    <li data-value="36">Bentota</li>
                    <li data-value="37">Beruwala</li>
                    <li data-value="38">Bibile</li>
                    <li data-value="39">Bingiriya</li>
                    <li data-value="40">Biyagama</li>
                    <li data-value="41">Boralesgamuwa</li>
                    <li data-value="42">Borella</li>
                    <li data-value="43">Bothale Ihalagama</li>
                    <li data-value="44">Bulathkohupitiya</li>
                    <li data-value="45">Buthgamuwa</li>
                    <li data-value="46">Buttala</li>
                    <li data-value="47">Chavakacheri</li>
                    <li data-value="48">Chilaw</li>
                    <li data-value="49">Coimbatore</li>
                    <li data-value="50">Colombo 01</li>
                    <li data-value="51">Colombo 02</li>
                    <li data-value="52">Colombo 03</li>
                    <li data-value="53">Colombo 04</li>
                    <li data-value="54">Colombo 05</li>
                    <li data-value="55">Colombo 06</li>
                    <li data-value="56">Colombo 07</li>
                    <li data-value="57">Colombo 08</li>
                    <li data-value="58">Colombo 09</li>
                    <li data-value="59">Colombo 10</li>
                    <li data-value="60">Colombo 11</li>
                    <li data-value="61">Colombo 12</li>
                    <li data-value="62">Colombo 13</li>
                    <li data-value="63">Colombo 14</li>
                    <li data-value="64">Colombo 15</li>
                    <li data-value="65">Colombo All</li>
                    <li data-value="66">Dalugama</li>
                    <li data-value="67">Dambulla</li>
                    <li data-value="68">Dankotuwa</li>
                    <li data-value="69">Dehiattakandiya</li>
                    <li data-value="70">Dehiowita</li>
                    <li data-value="71">Dehiwala</li>
                    <li data-value="72">Delgoda</li>
                    <li data-value="73">Delkanda</li>
                    <li data-value="74">Deniyaya</li>
                    <li data-value="75">Depanama</li>
                    <li data-value="76">Deraniyagala</li>
                    <li data-value="77">Digana</li>
                    <li data-value="78">Dikwella</li>
                    <li data-value="79">Divulapitiya</li>
                    <li data-value="80">Diyathalawa</li>
                    <li data-value="81">Dompe</li>
                    <li data-value="82">Eheliyagoda</li>
                    <li data-value="83">Ekala</li>
                    <li data-value="84">Elakanda</li>
                    <li data-value="85">Ella</li>
                    <li data-value="86">Elpitiya</li>
                    <li data-value="87">Embilipitiya</li>
                    <li data-value="88">Eppawala</li>
                    <li data-value="89">Eravur</li>
                    <li data-value="90">Ethul Kotte</li>
                    <li data-value="91">Ettampitiya</li>
                    <li data-value="92">Galagedara</li>
                    <li data-value="93">Galawewa</li>
                    <li data-value="94">Galawilawatta</li>
                    <li data-value="95">Galenbindunuwewa</li>
                    <li data-value="96">Galewela</li>
                    <li data-value="97">Galgamuwa</li>
                    <li data-value="98">Galigamuwa</li>
                    <li data-value="99">Galle</li>
                    <li data-value="100">Galnewa</li>
                    <li data-value="101">Gampaha</li>
                    <li data-value="102">Gampola</li>
                    <li data-value="103">Ganemulla</li>
                    <li data-value="104">Gangodawila</li>
                    <li data-value="105">Gelioya</li>
                    <li data-value="106">Ginigathhena</li>
                    <li data-value="107">Giriulla</li>
                    <li data-value="108">Godagama</li>
                    <li data-value="109">Gothatuwa</li>
                    <li data-value="110">Habarana</li>
                    <li data-value="111">Hakmana</li>
                    <li data-value="112">Hali-ela</li>
                    <li data-value="113">Hambantota</li>
                    <li data-value="114">Hanwella</li>
                    <li data-value="115">Haputale</li>
                    <li data-value="116">Harispattuwa</li>
                    <li data-value="117">Hatton</li>
                    <li data-value="118">Hettipola</li>
                    <li data-value="119">Hikkaduwa</li>
                    <li data-value="120">Hingurakgoda</li>
                    <li data-value="121">Hingurana</li>
                    <li data-value="122">Hingurangala</li>
                    <li data-value="123">Hokandara</li>
                    <li data-value="124">Homagama</li>
                    <li data-value="125">Horana</li>
                    <li data-value="126">Hungama</li>
                    <li data-value="127">Ibbagamuwa</li>
                    <li data-value="128">Imaduwa</li>
                    <li data-value="129">Ingiriya</li>
                    <li data-value="130">Ja-Ela</li>
                    <li data-value="131">Jaffna</li>
                    <li data-value="132">Kadana</li>
                    <li data-value="133">Kadawatha</li>
                    <li data-value="134">Kadugannawa</li>
                    <li data-value="135">Kaduruwela</li>
                    <li data-value="136">Kaduwela</li>
                    <li data-value="137">Kahatuduwa</li>
                    <li data-value="138">Kahawatta</li>
                    <li data-value="139">Kalagedihena</li>
                    <li data-value="140">Kalapaluwawa</li>
                    <li data-value="141">Kalawana</li>
                    <li data-value="142">Kaleliya</li>
                    <li data-value="143">Kalmunai</li>
                    <li data-value="144">Kalmunai</li>
                    <li data-value="145">Kalpitiya</li>
                    <li data-value="146">Kaluaggala</li>
                    <li data-value="147">Kalubowila</li>
                    <li data-value="148">Kaluthara</li>
                    <li data-value="149">Kamburugamuwa</li>
                    <li data-value="150">Kamburupitiya</li>
                    <li data-value="151">Kandana</li>
                    <li data-value="152">Kandy</li>
                    <li data-value="153">Karapitiya</li>
                    <li data-value="154">Katana</li>
                    <li data-value="155">Kataragama</li>
                    <li data-value="156">Kattankudy</li>
                    <li data-value="157">Katubedda</li>
                    <li data-value="158">Katugastota</li>
                    <li data-value="159">Katunayake</li>
                    <li data-value="160">Katuneriya</li>
                    <li data-value="161">Katuwana</li>
                    <li data-value="162">Kebithigollewa</li>
                    <li data-value="163">Kegalle</li>
                    <li data-value="164">Kekanadura</li>
                    <li data-value="165">Kekirawa</li>
                    <li data-value="166">Kelaniya</li>
                    <li data-value="167">Kerawalapitiya</li>
                    <li data-value="168">Kesbewa</li>
                    <li data-value="169">Kilinochchi</li>
                    <li data-value="170">Kimbulapitiya</li>
                    <li data-value="171">Kiribathgoda</li>
                    <li data-value="172">Kirinda</li>
                    <li data-value="173">Kirulapone</li>
                    <li data-value="174">Kitulgala</li>
                    <li data-value="175">Kochchikade</li>
                    <li data-value="176">Koggala</li>
                    <li data-value="177">Kohuwala</li>
                    <li data-value="178">Kollupitiya</li>
                    <li data-value="179">Kolonnawa</li>
                    <li data-value="180">Koralawella</li>
                    <li data-value="181">Korathota</li>
                    <li data-value="182">Kosgama</li>
                    <li data-value="183">Kosgoda</li>
                    <li data-value="184">Koswatta</li>
                    <li data-value="185">Kotadeniyawa</li>
                    <li data-value="186">Kotahena</li>
                    <li data-value="187">Kothalawala</li>
                    <li data-value="188">Kotikawatta</li>
                    <li data-value="189">Kottawa</li>
                    <li data-value="190">Kotte</li>
                    <li data-value="191">Kuliyapitiya</li>
                    <li data-value="192">Kundasale</li>
                    <li data-value="193">Kuruna</li>
                    <li data-value="194">Kurunegala</li>
                    <li data-value="195">Kuruwita</li>
                    <li data-value="196">local_jobs</li>
                    <li data-value="197">Mabima</li>
                    <li data-value="198">Mabola</li>
                    <li data-value="199">Madampitiya</li>
                    <li data-value="200">Madiwela</li>
                    <li data-value="201">Madola</li>
                    <li data-value="202">Magammana</li>
                    <li data-value="203">Mahabage</li>
                    <li data-value="204">Mahara</li>
                    <li data-value="205">Maharagama</li>
                    <li data-value="206">Mahiyanganaya</li>
                    <li data-value="207">Makola</li>
                    <li data-value="208">Makumbura</li>
                    <li data-value="209">Malabe</li>
                    <li data-value="210">Malkaduwawa</li>
                    <li data-value="211">Malwana</li>
                    <li data-value="212">Mannar</li>
                    <li data-value="213">Maradana</li>
                    <li data-value="214">Marawila</li>
                    <li data-value="215">Matale</li>
                    <li data-value="216">Matara</li>
                    <li data-value="217">Mathugama</li>
                    <li data-value="218">Mattakkuliya</li>
                    <li data-value="219">Mattala</li>
                    <li data-value="220">Matugama</li>
                    <li data-value="221">Mawanella</li>
                    <li data-value="222">Mawathagama</li>
                    <li data-value="223">Medawachchiya</li>
                    <li data-value="224">Medirigiriya</li>
                    <li data-value="225">Meegoda</li>
                    <li data-value="226">Meepe</li>
                    <li data-value="227">Meethotamulla</li>
                    <li data-value="228">Menikhinna</li>
                    <li data-value="229">Mihintale</li>
                    <li data-value="230">Minuwangoda</li>
                    <li data-value="231">Mirigama</li>
                    <li data-value="232">Mirissa</li>
                    <li data-value="233">Modara</li>
                    <li data-value="234">Monaragala</li>
                    <li data-value="235">Moratuwa</li>
                    <li data-value="236">Morawaka</li>
                    <li data-value="237">Mount Lavinia</li>
                    <li data-value="238">Mullaitivu</li>
                    <li data-value="239">Mulleriyawa North</li>
                    <li data-value="240">Mulleriyawa South</li>
                    <li data-value="241">Nainamadama</li>
                    <li data-value="242">Narahenpita</li>
                    <li data-value="243">Narammala</li>
                    <li data-value="244">Nattandiya</li>
                    <li data-value="245">Naula</li>
                    <li data-value="246">Navinna</li>
                    <li data-value="247">Nawagamuwa</li>
                    <li data-value="248">Nawala</li>
                    <li data-value="249">Nawalapitiya</li>
                    <li data-value="250">Negombo</li>
                    <li data-value="251">Nelliady</li>
                    <li data-value="252">Nikaweratiya</li>
                    <li data-value="253">Nilaveli</li>
                    <li data-value="254">Nittambuwa</li>
                    <li data-value="255">Nivithigala</li>
                    <li data-value="256">Nochchiyagama</li>
                    <li data-value="257">Nugegoda</li>
                    <li data-value="258">Nuwara Eliya</li>
                    <li data-value="259">Oddamavadi</li>
                    <li data-value="260">Okkampitiya</li>
                    <li data-value="261">Orugodawatta</li>
                    <li data-value="262">Oruwala</li>
                    <li data-value="263">Padiyatalawa</li>
                    <li data-value="264">Padukka</li>
                    <li data-value="265">Pahalawela</li>
                    <li data-value="266">Palapathwela</li>
                    <li data-value="267">Palau</li>
                    <li data-value="268">Palaviya</li>
                    <li data-value="269">Pallekele</li>
                    <li data-value="270">Pamankada</li>
                    <li data-value="271">Pamunuwa</li>
                    <li data-value="272">Panadura</li>
                    <li data-value="273">Panchikawatta</li>
                    <li data-value="274">Pannala</li>
                    <li data-value="275">Pannipitiya</li>
                    <li data-value="276">Pasikuda</li>
                    <li data-value="277">Passara</li>
                    <li data-value="278">Pasyala</li>
                    <li data-value="279">Pelawatta</li>
                    <li data-value="280">Peliyagoda</li>
                    <li data-value="281">Pelmadulla</li>
                    <li data-value="282">Pepiliyana</li>
                    <li data-value="283">Peradeniya</li>
                    <li data-value="284">Pettah</li>
                    <li data-value="285">Pilimathalawa</li>
                    <li data-value="286">Piliyandala</li>
                    <li data-value="287">Pita Kotte</li>
                    <li data-value="288">Pittugala</li>
                    <li data-value="289">Point Pedro</li>
                    <li data-value="290">Polgahawela</li>
                    <li data-value="291">Polgasowita</li>
                    <li data-value="292">Polonnaruwa</li>
                    <li data-value="293">Poojapitiya</li>
                    <li data-value="294">Pugoda</li>
                    <li data-value="295">Puttalam</li>
                    <li data-value="296">Radawana</li>
                    <li data-value="297">Ragama</li>
                    <li data-value="298">Rajagiriya</li>
                    <li data-value="299">Rambukkana</li>
                    <li data-value="300">Ranala</li>
                    <li data-value="301">Ranna</li>
                    <li data-value="302">Rathmalana</li>
                    <li data-value="303">Rathmale</li>
                    <li data-value="304">Ratnapura</li>
                    <li data-value="305">Rattanapitiya</li>
                    <li data-value="306">Ruhunupura</li>
                    <li data-value="307">Rukmalgama</li>
                    <li data-value="308">Ruwanwella</li>
                    <li data-value="309">Sampur</li>
                    <li data-value="310">Sapugaskanda</li>
                    <li data-value="311">Sedawatta</li>
                    <li data-value="312">Seeduwa</li>
                    <li data-value="313">Siddamulla</li>
                    <li data-value="314">Sigiriya</li>
                    <li data-value="315">Suriyakanda</li>
                    <li data-value="316">Talawa</li>
                    <li data-value="317">Tangalle</li>
                    <li data-value="318">Thalahena</li>
                    <li data-value="319">Thalangama</li>
                    <li data-value="320">Thalathuoya</li>
                    <li data-value="321">Thalathuoya</li>
                    <li data-value="322">Thalawathugoda</li>
                    <li data-value="323">Thambuttegama</li>
                    <li data-value="324">Thangalla</li>
                    <li data-value="325">Thimbirigasyaya</li>
                    <li data-value="326">Thirunelvely</li>
                    <li data-value="327">Thotagoda</li>
                    <li data-value="328">Thummulla</li>
                    <li data-value="329">Tissamaharama</li>
                    <li data-value="330">Town Hall</li>
                    <li data-value="331">Trincomalee</li>
                    <li data-value="332">Udahamulla</li>
                    <li data-value="333">Udappu</li>
                    <li data-value="334">Udawalawa</li>
                    <li data-value="335">Udugama</li>
                    <li data-value="336">Udugampola</li>
                    <li data-value="337">Ukuwela</li>
                    <li data-value="338">Unawatuna</li>
                    <li data-value="339">Union Place</li>
                    <li data-value="340">Valvettithurai</li>
                    <li data-value="341">Vauxhall Street</li>
                    <li data-value="342">Vavuniya</li>
                    <li data-value="343">Veyangoda</li>
                    <li data-value="344">Wadduwa</li>
                    <li data-value="345">Waikkal</li>
                    <li data-value="346">Warakapola</li>
                    <li data-value="347">Wariyapola</li>
                    <li data-value="348">Waskaduwa</li>
                    <li data-value="349">Wathupitiwala</li>
                    <li data-value="350">Wattala</li>
                    <li data-value="351">Wattegama</li>
                    <li data-value="352">Welesara</li>
                    <li data-value="353">Weligama</li>
                    <li data-value="354">Welikanda</li>
                    <li data-value="355">Welimada</li>
                    <li data-value="356">Welipenna</li>
                    <li data-value="357">Welisara</li>
                    <li data-value="358">Welivita</li>
                    <li data-value="359">Wellampitiya</li>
                    <li data-value="360">Wellawatte</li>
                    <li data-value="361">Wellawaya</li>
                    <li data-value="362">Wennappuwa</li>
                    <li data-value="363">Werahera</li>
                    <li data-value="364">Weralugama</li>
                    <li data-value="365">Wijerama</li>
                    <li data-value="366">Yakkala</li>
                    <li data-value="367">Yala</li>
                    <li data-value="368">Yanthampalawa</li>
                    <li data-value="369">Yatawatta</li>
                    <li data-value="370">Yatiyanthota</li>
                </ul>
            </div>
            <div class="input-container with-drop-down">
                <input type="text" placeholder=" " class="dynamic-dropdown" id="categories" name="category" value="<?php echo isset($_GET['category']) ? htmlspecialchars($_GET['category']) : ''; ?>">
                <label for="categories">Category</label>
                <button class="clearButton" type="button" style="<?php echo !empty($_GET['category']) ? 'display: inline-block;' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                    </svg>
                </button>
                <ul class="drop-down-data">
                    <li>Accounting/Finance/Auditing</li>
                    <li>Admin/Clerk/Office Assistant</li>
                    <li>Agriculture/Dairy/Fisheries</li>
                    <li>Apparel/Garment/Clothing</li>
                    <li>Architecture/Interior/Design</li>
                    <li>Automotive/Aviation</li>
                    <li>Banking/Finance</li>
                    <li>BPO/KPO</li>
                    <li>Business Development/Strategy/Corporate Planning</li>
                    <li>Carpentry/Woodwork/Furniture</li>
                    <li>Cashier</li>
                    <li>Cleaning/Maintenance</li>
                    <li>Construction/Civil Engineering/QS</li>
                    <li>Consultancy/Coordination</li>
                    <li>Customer Relations/Public Relations</li>
                    <li>Customer Support/Call Centre</li>
                    <li>Data Entry/Data Formatting/Type Setting/</li>
                    <li>Data Entry/Payroll</li>
                    <li>Design/Art/Photography</li>
                    <li>Driver/Chauffeur/Transport</li>
                    <li>Education/Teaching/Academic</li>
                    <li>Electronics/Electrical</li>
                    <li>Engineering</li>
                    <li>Fashion/Design/Beauty</li>
                    <li>Food/Beverage/Catering</li>
                    <li>General labor/Other</li>
                    <li>Hospitality/Tourism</li>
                    <li>Hotels/Restaurants</li>
                    <li>HR/Recruitment/Training</li>
                    <li>Insurance</li>
                    <li>International</li>
                    <li>IT/Hardware/Network/System Admin</li>
                    <li>IT/Programming</li>
                    <li>IT/Software/Web/Database/QA</li>
                    <li>Legal/Law/Risk/Compliance</li>
                    <li>Leisure/Tourism/Travel</li>
                    <li>Logistics/Warehouse/Transport</li>
                    <li>Maintenance/Technical/Repair</li>
                    <li>Management/Analysts</li>
                    <li>Manufacturing/Industrial/Operations</li>
                    <li>Mason/Plumber/Helper</li>
                    <li>Media/Advertising/PR/Communications</li>
                    <li>Medical/Health/Pharmaceutical</li>
                    <li>Motor Mechanics</li>
                    <li>Multimedia/Animations/Graphic Designing</li>
                    <li>NGO/Charity</li>
                    <li>Office Admin/Secretarial/Receptionist</li>
                    <li>Other</li>
                    <li>Procurement/Supply Chain</li>
                    <li>Project Management</li>
                    <li>Psychology/Counseling</li>
                    <li>Retail/Trading/Services</li>
                    <li>Sales/Marketing/Merchandising</li>
                    <li>Seaman/Sailor/Marine</li>
                    <li>Security</li>
                    <li>Sports/Fitness/Recreational</li>
                    <li>Store/Warehouse/Inventory</li>
                    <li>Supervision/Quality Control</li>
                    <li>Telecommunication/Network</li>
                    <li>Ticketing/Airline/Marine</li>
                    <li>Transport/Logistics</li>
                    <li>Welder/Painter/Helper</li>

                </ul>
            </div>
            <div class="input-container with-drop-down">
                <input type="text" placeholder=" " id="workingHours" class="dynamic-dropdown" name="type" value="<?php echo isset($_GET['type']) ? htmlspecialchars($_GET['type']) : ''; ?>">
                <label for="workingHours">Job Type</label>
                <button class="clearButton" type="button" style="<?php echo !empty($_GET['type']) ? 'display: inline-block;' : ''; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                    </svg>
                </button>
                <ul class="drop-down-data">
                    <li>Part-time</li>
                    <li>Full-time</li>
                    <li>Internship</li>
                </ul>
            </div>

            <button class="submit-search">
                Search
            </button>

            <?php
            if (!empty($_GET['category']) || !empty($_GET['location']) || !empty($_GET['type'])) { ?>
                <button type="button" class="clear-search submit-search" onclick="window.location.href = './job-listings.php'">
                    clear
                </button>
            <?php }

            ?>


        </div>
    </form>
</div>

<main>
    <div class="job-display-wrapper">
        <h1>
            <?php
            if (!empty($_GET['category']) || !empty($_GET['location']) || !empty($_GET['type'])) {
                echo "Search Results";
            } else {
                echo "Job Listings";
            }

            ?>

        </h1>

        <div class="job-display-container">
            <?php echo fetchJobs(); ?>
        </div>
    </div>
</main>

<?php

include_once('./partials/footer.php');

?>