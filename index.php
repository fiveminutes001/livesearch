<?php
//SESSION START	
session_start();

//ERRORS DISPLAY
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//GET FUNCTION TO GET DB DETAILS FROM FAR FILE//OUTPUT 00
include "php/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<title>Home Test</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: 'Raleway', sans-serif;
    }

    .w3-third img {
        margin-bottom: -6px;
        opacity: 0.8;
        cursor: pointer;
    }

    .w3-third img:hover {
        opacity: 1;
    }

    body {
        margin: 0;
        min-width: 250px;
    }

    /* Include the padding and border in an element's total width and height */
    * {
        box-sizing: border-box;
    }

    /* Remove margins and padding from the list */
    ul {
        margin: 0;
        padding: 0;
    }

    /* Style the list items */
    ul li {
        cursor: pointer;
        position: relative;
        padding: 12px 36px 12px 12px;
        list-style-type: none;
        background: #eee;
        font-size: 18px;
        transition: 0.2s;

        /* make the list items unselectable */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Set all odd list items to a different color (zebra-stripes) */
    ul li:nth-child(odd) {
        background: #f9f9f9;
    }

    /* Darker background-color on hover */
    ul li:hover {
        background: #ddd;
    }

    /* When clicked on, add a background color and strike out text */
    ul li.checked {
        background: #888;
        color: #fff;
        text-decoration: line-through;
    }

    /* Add a "checked" mark when clicked on */
    ul li.checked::before {
        content: '';
        position: absolute;
        border-color: #fff;
        border-style: solid;
        border-width: 0 2px 2px 0;
        top: 10px;
        left: 16px;
        transform: rotate(45deg);
        height: 15px;
        width: 7px;
    }

    /* Style the close button */
    .close {
        position: absolute;
        right: 0;
        top: 0;
        padding: 12px 16px 12px 16px;
    }

    .close:hover {
        background-color: #009688;
        color: white;
    }

    /* Style the header */
    .header {
        background-color: #009688;
        padding: 30px 40px;
        color: white;
        text-align: center;
    }

    /* Clear floats after the header */
    .header:after {
        content: '';
        display: table;
        clear: both;
    }

    /* Style the input */
    input {
        margin: 0;
        border: none;
        border-radius: 0;
        width: 100%;
        padding: 10px;
        float: left;
        font-size: 16px;
    }

    /* Style the "Add" button */
    .addBtn {
        padding: 10px;
        width: 25%;
        background: #d9d9d9;
        color: #555;
        float: left;
        text-align: center;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 0;
    }

    .addBtn:hover {
        background-color: #bbb;
    }
</style>

<body class="w3-light-grey w3-content" style="max-width: 1600px">
    <!-- Sidebar/menu -->
    <nav class="
				w3-sidebar
				w3-bar-block
				w3-white
				w3-animate-left
				w3-text-grey
				w3-collapse
				w3-top
				w3-center
			" style="z-index: 3; width: 300px; font-weight: bold" id="mySidebar">
        <br />
        <h3 class="w3-padding-64 w3-center">
            <b>HOME<br />TEST</b>
        </h3>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><?php echo  $check_mark;
                                                                        echo $con_status; ?></a>
        <!--
			<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"
				>ABOUT ME</a
			>
			<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button"
				>CONTACT</a
			>-->
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding">HOME TEST</span>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor: pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left: 300px">
        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top: 83px"></div>
        <div class="w3-padding-16">
            <div class="w3-card">
                <div id="myDIV" class="header">
                    <h2 style="margin: 5px">Results</h2>
                    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search..." />
                </div>

                <ul id="myMenu">
                    <li>
                        additi_nte_mite | geoge.schmtt@lala.com | George Schmitt |
                        Chaoburg | Bilba Gardner
                    </li>
                    <li>
                        mouth_dbai_y | kagan.fredman@lala.com | Keagan Friedman | Uglax |
                        Bilba Gardner
                    </li>
                    <li>
                        chad_andf_awed | ampbell.oover@lala.com | Campbell Hoover | Etrana
                        | Bilba Gardner
                    </li>
                    <li>
                        litera_ybu_pkin | desiny.beasey@lala.com | Destiny Beasley |
                        Chaoburg | Bilba Gardner
                    </li>
                    <li>
                        slime_urde_ | nya.glss@lala.com | Nyla Glass | Friatho | Bilba
                        Gardner
                    </li>
                    <li>
                        eaterm_n_led | wyne.croby@lala.com | Wayne Crosby | Friatho |
                        Bilba Gardner
                    </li>
                    <li>
                        bearu_de_stand | marsall.tomas@lala.com | Marshall Thomas | Etrana
                        | Bilba Gardner
                    </li>
                    <li>
                        welsh_es_ | charee.nortn@lala.com | Charlee Norton | Chaoburg |
                        Bilba Gardner
                    </li>
                    <li>
                        whimp_ew_terski | teve.hwe@lala.com | Steve Howe | Uglax | Bilba
                        Gardner
                    </li>
                    <li>
                        tickto_k_quate | inn.wber@lala.com | Finn Weber | Hoshor | Bilba
                        Gardner
                    </li>
                    <li>
                        punis_men_bangbang | fancisco.hueta@lala.com | Francisco Huerta |
                        Bepriedan | Bilba Gardner
                    </li>
                    <li>
                        dumba_sfe_ret | izayh.meltn@lala.com | Izayah Melton | Chaoburg |
                        Bilba Gardner
                    </li>
                    <li>
                        illfat_dai_ | adrina.vilegas@lala.com | Adriana Villegas |
                        Chaoburg | Bilba Gardner
                    </li>
                    <li>
                        feel_ngpop_ | lgan.kid@lala.com | Logan Kidd | Hoshor | Bilba
                        Gardner
                    </li>
                    <li>
                        wors_edun_ol | joelyn.hobs@lala.com | Joselyn Hobbs | Etrana |
                        Bilba Gardner
                    </li>
                    <li>
                        spust_ard_ | omr.specer@lala.com | Omar Spencer | Etrana | Bilba
                        Gardner
                    </li>
                    <li>
                        fencer_or_ie | byce.bady@lala.com | Bryce Brady | Friatho | Bilba
                        Gardner
                    </li>
                    <li>
                        scutt_esbo_fin | ev.blac@lala.com | Eva Black | Uglax | Bilba
                        Gardner
                    </li>
                    <li>
                        trysai_dr_ss | kllen.hiks@lala.com | Kellen Hicks | Uglax | Bilba
                        Gardner
                    </li>
                    <li>
                        genoa_ubt_e | rut.livigston@lala.com | Ruth Livingston | Bepriedan
                        | Bilba Gardner
                    </li>
                    <li>
                        wurfi_gd_bersome | alfnso.hoffan@lala.com | Alfonso Hoffman |
                        Hoshor | Fridugis Riverhopper
                    </li>
                    <li>
                        mostaf_g_wing | quinon.sevenson@lala.com | Quinton Stevenson |
                        Bepriedan | Fridugis Riverhopper
                    </li>
                    <li>
                        earsu_vive_ | ryle.noran@lala.com | Rylee Norman | Friatho |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        underg_ant_ology | noa.gibs@lala.com | Nola Gibbs | Chaoburg |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        laug_check_ | lra.tat@lala.com | Lara Tate | Uglax | Fridugis
                        Riverhopper
                    </li>
                    <li>
                        harpye_s_ern | rodlfo.odd@lala.com | Rodolfo Todd | Friatho |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        blut_ingf_resail | briger.cllahan@lala.com | Bridger Callahan |
                        Bepriedan | Fridugis Riverhopper
                    </li>
                    <li>
                        exxo_catni_ | mari.sauners@lala.com | Amari Saunders | Friatho |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        golfer_rim_ry | matha.inton@lala.com | Martha Hinton | Etrana |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        famil_ar_agwitch | damrion.hortn@lala.com | Damarion Horton |
                        Etrana | Fridugis Riverhopper
                    </li>
                    <li>
                        wink_karka_off | tystan.chapan@lala.com | Trystan Chapman | Hoshor
                        | Fridugis Riverhopper
                    </li>
                    <li>
                        pettyb_bl_ | precous.mcann@lala.com | Precious Mccann | Hoshor |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        waywa_ds_ene | rena.has@lala.com | Reyna Hays | Chaoburg |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        conf_und_dgrod | mar.haw@lala.com | Mark Shaw | Friatho | Fridugis
                        Riverhopper
                    </li>
                    <li>
                        billi_kinb_lted | misel.padlla@lala.com | Misael Padilla | Friatho
                        | Fridugis Riverhopper
                    </li>
                    <li>
                        rowin_sno_ble | ayvon.iddleton@lala.com | Jayvon Middleton |
                        Bepriedan | Fridugis Riverhopper
                    </li>
                    <li>
                        resi_tan_eprime | emeron.roma@lala.com | Emerson Roman | Etrana |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        inse_tbrag_art | shyan.imenez@lala.com | Shyann Jimenez | Etrana |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        came_ircu_ar | byro.erritt@lala.com | Byron Merritt | Chaoburg |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        gentl_rosy_ | payon.buer@lala.com | Payton Bauer | Chaoburg |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        neck_iesn_ctor | jayee.sephenson@lala.com | Jaylee Stephenson |
                        Friatho | Fridugis Riverhopper
                    </li>
                    <li>
                        prick_yba_hroom | jaspr.moraes@lala.com | Jasper Morales |
                        Chaoburg | Fridugis Riverhopper
                    </li>
                    <li>
                        icesk_tes_eaky | haley.arold@lala.com | Hadley Arnold | Chaoburg |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        vein_evela_ion | arlie.powrs@lala.com | Marlie Powers | Etrana |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        capo_maple_ | halie.shafer@lala.com | Hallie Shaffer | Uglax |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        flird_sp_rse | aola.bater@lala.com | Paola Baxter | Friatho |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        boff_lau_ilized | dwin.pau@lala.com | Edwin Paul | Bepriedan |
                        Fridugis Riverhopper
                    </li>
                    <li>
                        care_rbri_f | cob.gimes@lala.com | Coby Grimes | Uglax | Lo Rumble
                    </li>
                    <li>
                        pearlb_t_on | alerie.vaquez@lala.com | Valerie Vazquez | Etrana |
                        Lo Rumble
                    </li>
                    <li>
                        brough_n_pcheese | arya.ncholson@lala.com | Aryan Nicholson |
                        Friatho | Lo Rumble
                    </li>
                    <li>
                        hassa_oi_ | kaiy.buch@lala.com | Kaiya Burch | Uglax | Lo Rumble
                    </li>
                    <li>
                        cahoo_st_ip | marus.ewig@lala.com | Markus Ewing | Friatho | Lo
                        Rumble
                    </li>
                    <li>
                        festo_nl_nspresado | renda.or@lala.com | Brenda Orr | Etrana | Lo
                        Rumble
                    </li>
                    <li>
                        agiles_on_mason | isael.poers@lala.com | Misael Powers | Etrana |
                        Lo Rumble
                    </li>
                    <li>
                        chiss_ngr_searcher | erain.wang@lala.com | Efrain Wang | Uglax |
                        Lo Rumble
                    </li>
                    <li>
                        snapf_on_al | alexndria.huner@lala.com | Alexandria Hunter |
                        Hoshor | Lo Rumble
                    </li>
                    <li>
                        helmc_ll_ | kaia.weeler@lala.com | Kaia Wheeler | Bepriedan | Lo
                        Rumble
                    </li>
                    <li>
                        wors_explo_e | issc.osbone@lala.com | Issac Osborne | Uglax | Lo
                        Rumble
                    </li>
                    <li>
                        zwodd_rycl_bs | iffany.joyc@lala.com | Tiffany Joyce | Friatho |
                        Lo Rumble
                    </li>
                    <li>
                        dalcop_ro_n | rittany.coke@lala.com | Brittany Cooke | Friatho |
                        Lo Rumble
                    </li>
                    <li>
                        tech_ical_hopkins | waye.duglas@lala.com | Wayne Douglas | Etrana
                        | Lo Rumble
                    </li>
                    <li>
                        chell_bor_ed | gage.pone@lala.com | Gage Ponce | Etrana | Merimas
                        Silverstring
                    </li>
                    <li>
                        sear_dwool_ich | jenn.meji@lala.com | Jenny Mejia | Hoshor |
                        Merimas Silverstring
                    </li>
                    <li>
                        enedw_ith_enville | ael.jennngs@lala.com | Gael Jennings | Etrana
                        | Merimas Silverstring
                    </li>
                    <li>
                        weamy_xcit_ment | danella.richrds@lala.com | Daniella Richards |
                        Chaoburg | Merimas Silverstring
                    </li>
                    <li>
                        stro_glim_ic | sydee.kne@lala.com | Sydnee Kane | Bepriedan |
                        Merimas Silverstring
                    </li>
                    <li>
                        sowerb_r_ytick | morah.daidson@lala.com | Moriah Davidson |
                        Bepriedan | Merimas Silverstring
                    </li>
                    <li>
                        macaw_ube_ | hyann.wes@lala.com | Shyann West | Friatho | Merimas
                        Silverstring
                    </li>
                    <li>
                        revea_fr_nchy | aanda.htfield@lala.com | Amanda Hatfield | Uglax |
                        Merimas Silverstring
                    </li>
                    <li>
                        skants_or_upt | valeie.rch@lala.com | Valerie Rich | Bepriedan |
                        Merimas Silverstring
                    </li>
                    <li>
                        gann_the_am | wlliam.ross@lala.com | William Ross | Uglax |
                        Merimas Silverstring
                    </li>
                    <li>
                        fetchg_o_ty | seven.ndrews@lala.com | Steven Andrews | Friatho |
                        Merimas Silverstring
                    </li>
                    <li>
                        bitte_nexp_riment | skler.broks@lala.com | Skyler Brooks |
                        Bepriedan | Merimas Silverstring
                    </li>
                    <li>
                        umpire_pti_istic | lanen.galvn@lala.com | Landen Galvan | Hoshor |
                        Merimas Silverstring
                    </li>
                    <li>
                        swed_shnec_ | kai.lcero@lala.com | Kali Lucero | Etrana | Merimas
                        Silverstring
                    </li>
                    <li>
                        batter_yem_ni | asa.ardy@lala.com | Asia Hardy | Bepriedan |
                        Merimas Silverstring
                    </li>
                    <li>
                        tramp_li_ehoury | unnar.axwell@lala.com | Gunnar Maxwell | Etrana
                        | Pepin Silentfoot
                    </li>
                    <li>
                        norb_rtre_orm | pela.garnr@lala.com | Perla Garner | Chaoburg |
                        Pepin Silentfoot
                    </li>
                    <li>
                        hick_eteo_ojinx | gavn.tkins@lala.com | Gavin Atkins | Hoshor |
                        Pepin Silentfoot
                    </li>
                    <li>
                        himse_fted_ime | olly.illarreal@lala.com | Molly Villarreal |
                        Friatho | Pepin Silentfoot
                    </li>
                    <li>
                        brie_stap_ | arilla.ane@lala.com | Ariella Kane | Uglax | Pepin
                        Silentfoot
                    </li>
                    <li>
                        surm_seco_e | alter.bra@lala.com | Walter Bray | Uglax | Pepin
                        Silentfoot
                    </li>
                    <li>
                        wrest_ersa_oring | kia.soo@lala.com | Kira Soto | Etrana | Pepin
                        Silentfoot
                    </li>
                    <li>
                        surge_np_bster | haile.mrillo@lala.com | Hailee Murillo | Friatho
                        | Pepin Silentfoot
                    </li>
                    <li>
                        effi_ienc_buckwheat | naalee.morles@lala.com | Natalee Morales |
                        Etrana | Pepin Silentfoot
                    </li>
                    <li>
                        quoti_nt_unch | lanyn.terr@lala.com | Landyn Terry | Friatho |
                        Pepin Silentfoot
                    </li>
                    <li>
                        improv_flu_gers | alec.soto@lala.com | Alec Soto | Uglax | Pepin
                        Silentfoot
                    </li>
                    <li>
                        curec_ity_ootransport | jaet.care@lala.com | Janet Carey | Hoshor
                        | Pepin Silentfoot
                    </li>
                    <li>
                        ease_ot_ | rodrick.moye@lala.com | Roderick Moyer | Chaoburg |
                        Pepin Silentfoot
                    </li>
                    <li>
                        dobby_ir_e | atena.barett@lala.com | Athena Barnett | Hoshor |
                        Pepin Silentfoot
                    </li>
                    <li>
                        snicto_w_irr | on.err@lala.com | Jon Kerr | Friatho | Pepin
                        Silentfoot
                    </li>
                    <li>
                        cornea_ei_ht | kmeron.oyd@lala.com | Kameron Boyd | Bepriedan |
                        Pepin Silentfoot
                    </li>
                    <li>
                        cycl_fifth_ | arolyn.veazquez@lala.com | Carolyn Velazquez |
                        Friatho | Pepin Silentfoot
                    </li>
                    <li>
                        prac_ica_damaging | gabrelle.mcnil@lala.com | Gabrielle Mcneil |
                        Bepriedan | Pepin Silentfoot
                    </li>
                    <li>
                        scor_hedm_d | ryle.hoden@lala.com | Rylee Holden | Bepriedan |
                        Pepin Silentfoot
                    </li>
                    <li>
                        abrup_ago_izing | dam.soomon@lala.com | Adam Solomon | Hoshor |
                        Pepin Silentfoot
                    </li>
                    <li>
                        pand_qua_ified | maria.krueer@lala.com | Marina Krueger | Hoshor |
                        Pepin Silentfoot
                    </li>
                    <li>
                        invest_e_tsleauty | jamai.hawins@lala.com | Jamari Hawkins |
                        Friatho | Pepin Silentfoot
                    </li>
                    <li>
                        mimsy_to_ly | odney.keler@lala.com | Rodney Keller | Bepriedan |
                        Pepin Silentfoot
                    </li>
                    <li>
                        peps_opt_mal | raon.illiamson@lala.com | Ramon Williamson |
                        Friatho | Pepin Silentfoot
                    </li>
                </ul>
            </div>
            <br />
        </div>

        <div class="w3-black w3-center w3-padding-24">
            Powered by
            <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a>
        </div>

        <!-- End page content -->
    </div>
    <!-- Search box -->
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById('mySearch');
            filter = input.value.toUpperCase();
            ul = document.getElementById('myMenu');
            li = ul.getElementsByTagName('li');

            if (filter == '') {
                for (i = 0; i < li.length; i++) {
                    li[i].classList.remove('w3-show');
                    li[i].classList.add('w3-hide');
                }
            } else {
                for (i = 0; i < li.length; i++) {
                    if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        //li[i].style.display = 'block';
                        li[i].classList.remove('w3-hide');
                        li[i].classList.add('w3-show');
                    } else {
                        li[i].classList.remove('w3-show');
                        li[i].classList.add('w3-hide');
                    }
                }
            }
        }
    </script>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById('mySidebar').style.display = 'block';
            document.getElementById('myOverlay').style.display = 'block';
        }

        function w3_close() {
            document.getElementById('mySidebar').style.display = 'none';
            document.getElementById('myOverlay').style.display = 'none';
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById('img01').src = element.src;
            document.getElementById('modal01').style.display = 'block';
            var captionText = document.getElementById('caption');
            captionText.innerHTML = element.alt;
        }
    </script>
</body>

</html>