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
<head>
<title>Home Test</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
<script src="https://kit.fontawesome.com/541602f357.js" crossorigin="anonymous"></script>
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

</style>
<link rel="stylesheet" href="css/searchBox.css" />
</head>
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
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><?php echo  $check_mark . ' DB connection';
                                                                        ?></a>
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
                <div id="livesearch"></div>
                <ul id="myMenu"></ul>
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
         function addLi(dataFromDb){
            const fragment = document.createDocumentFragment();  
            // let dataFromDb =
            // [
            //     'additi_nte_mite | geoge.schmtt@lala.com | George Schmitt | Chaoburg | Bilba Gardner',
            //     'mouth_dbai_y | kagan.fredman@lala.com | Keagan Friedman | Uglax | Bilba Gardner',
            //     'chad_andf_awed | ampbell.oover@lala.com | Campbell Hoover | Etrana | Bilba Gardner',
            //     'litera_ybu_pkin | desiny.beasey@lala.com | Destiny Beasley | Chaoburg | Bilba Gardner',
            //     'slime_urde_ | nya.glss@lala.com | Nyla Glass | Friatho | Bilba Gardner',
            //     'eaterm_n_led | wyne.croby@lala.com | Wayne Crosby | Friatho | Bilba Gardner',
            //     'bearu_de_stand | marsall.tomas@lala.com | Marshall Thomas | Etrana | Bilba Gardner',
            //     'welsh_es_ | charee.nortn@lala.com | Charlee Norton | Chaoburg | Bilba Gardner',
            //     'whimp_ew_terski | teve.hwe@lala.com | Steve Howe | Uglax | Bilba Gardner',
            //     'tickto_k_quate | inn.wber@lala.com | Finn Weber | Hoshor | Bilba Gardner',
            //     'punis_men_bangbang | fancisco.hueta@lala.com | Francisco Huerta | Bepriedan | Bilba Gardner',
            //     'dumba_sfe_ret | izayh.meltn@lala.com | Izayah Melton | Chaoburg | Bilba Gardner',
            //     'illfat_dai_ | adrina.vilegas@lala.com | Adriana Villegas | Chaoburg | Bilba Gardner',
            //     'feel_ngpop_ | lgan.kid@lala.com | Logan Kidd | Hoshor | Bilba Gardner',
            //     'wors_edun_ol | joelyn.hobs@lala.com | Joselyn Hobbs | Etrana | Bilba Gardner',
            //     'spust_ard_ | omr.specer@lala.com | Omar Spencer | Etrana | Bilba Gardner',
            //     'fencer_or_ie | byce.bady@lala.com | Bryce Brady | Friatho | Bilba Gardner',
            //     'scutt_esbo_fin | ev.blac@lala.com | Eva Black | Uglax | Bilba Gardner',
            //     'trysai_dr_ss | kllen.hiks@lala.com | Kellen Hicks | Uglax | Bilba Gardner',
            //     'genoa_ubt_e | rut.livigston@lala.com | Ruth Livingston | Bepriedan | Bilba Gardner',
            //     'wurfi_gd_bersome | alfnso.hoffan@lala.com | Alfonso Hoffman | Hoshor | Fridugis Riverhopper',
            //     'mostaf_g_wing | quinon.sevenson@lala.com | Quinton Stevenson | Bepriedan | Fridugis Riverhopper',
            //     'earsu_vive_ | ryle.noran@lala.com | Rylee Norman | Friatho | Fridugis Riverhopper',
            //     'underg_ant_ology | noa.gibs@lala.com | Nola Gibbs | Chaoburg | Fridugis Riverhopper',
            //     'laug_check_ | lra.tat@lala.com | Lara Tate | Uglax | Fridugis Riverhopper',
            //     'harpye_s_ern | rodlfo.odd@lala.com | Rodolfo Todd | Friatho | Fridugis Riverhopper',
            //     'blut_ingf_resail | briger.cllahan@lala.com | Bridger Callahan | Bepriedan | Fridugis Riverhopper',
            //     'exxo_catni_ | mari.sauners@lala.com | Amari Saunders | Friatho | Fridugis Riverhopper',
            //     'golfer_rim_ry | matha.inton@lala.com | Martha Hinton | Etrana | Fridugis Riverhopper',
            //     'famil_ar_agwitch | damrion.hortn@lala.com | Damarion Horton | Etrana | Fridugis Riverhopper',
            //     'wink_karka_off | tystan.chapan@lala.com | Trystan Chapman | Hoshor | Fridugis Riverhopper',
            //     'pettyb_bl_ | precous.mcann@lala.com | Precious Mccann | Hoshor | Fridugis Riverhopper',
            //     'waywa_ds_ene | rena.has@lala.com | Reyna Hays | Chaoburg | Fridugis Riverhopper',
            //     'conf_und_dgrod | mar.haw@lala.com | Mark Shaw | Friatho | Fridugis Riverhopper',
            //     'billi_kinb_lted | misel.padlla@lala.com | Misael Padilla | Friatho | Fridugis Riverhopper',
            //     'rowin_sno_ble | ayvon.iddleton@lala.com | Jayvon Middleton | Bepriedan | Fridugis Riverhopper',
            //     'resi_tan_eprime | emeron.roma@lala.com | Emerson Roman | Etrana | Fridugis Riverhopper',
            //     'inse_tbrag_art | shyan.imenez@lala.com | Shyann Jimenez | Etrana | Fridugis Riverhopper',
            //     'came_ircu_ar | byro.erritt@lala.com | Byron Merritt | Chaoburg | Fridugis Riverhopper',
            //     'gentl_rosy_ | payon.buer@lala.com | Payton Bauer | Chaoburg | Fridugis Riverhopper',
            //     'neck_iesn_ctor | jayee.sephenson@lala.com | Jaylee Stephenson | Friatho | Fridugis Riverhopper',
            //     'prick_yba_hroom | jaspr.moraes@lala.com | Jasper Morales | Chaoburg | Fridugis Riverhopper',
            //     'icesk_tes_eaky | haley.arold@lala.com | Hadley Arnold | Chaoburg | Fridugis Riverhopper',
            //     'vein_evela_ion | arlie.powrs@lala.com | Marlie Powers | Etrana | Fridugis Riverhopper',
            //     'capo_maple_ | halie.shafer@lala.com | Hallie Shaffer | Uglax | Fridugis Riverhopper',
            //     'flird_sp_rse | aola.bater@lala.com | Paola Baxter | Friatho | Fridugis Riverhopper',
            //     'boff_lau_ilized | dwin.pau@lala.com | Edwin Paul | Bepriedan | Fridugis Riverhopper',
            //     'care_rbri_f | cob.gimes@lala.com | Coby Grimes | Uglax | Lo Rumble',
            //     'pearlb_t_on | alerie.vaquez@lala.com | Valerie Vazquez | Etrana | Lo Rumble',
            //     'brough_n_pcheese | arya.ncholson@lala.com | Aryan Nicholson | Friatho | Lo Rumble',
            //     'hassa_oi_ | kaiy.buch@lala.com | Kaiya Burch | Uglax | Lo Rumble',
            //     'cahoo_st_ip | marus.ewig@lala.com | Markus Ewing | Friatho | Lo Rumble',
            //     'festo_nl_nspresado | renda.or@lala.com | Brenda Orr | Etrana | Lo Rumble',
            //     'agiles_on_mason | isael.poers@lala.com | Misael Powers | Etrana | Lo Rumble',
            //     'chiss_ngr_searcher | erain.wang@lala.com | Efrain Wang | Uglax | Lo Rumble',
            //     'snapf_on_al | alexndria.huner@lala.com | Alexandria Hunter | Hoshor | Lo Rumble',
            //     'helmc_ll_ | kaia.weeler@lala.com | Kaia Wheeler | Bepriedan | Lo Rumble',
            //     'wors_explo_e | issc.osbone@lala.com | Issac Osborne | Uglax | Lo Rumble',
            //     'zwodd_rycl_bs | iffany.joyc@lala.com | Tiffany Joyce | Friatho | Lo Rumble',
            //     'dalcop_ro_n | rittany.coke@lala.com | Brittany Cooke | Friatho | Lo Rumble',
            //     'tech_ical_hopkins | waye.duglas@lala.com | Wayne Douglas | Etrana | Lo Rumble',
            //     'chell_bor_ed | gage.pone@lala.com | Gage Ponce | Etrana | Merimas Silverstring',
            //     'sear_dwool_ich | jenn.meji@lala.com | Jenny Mejia | Hoshor | Merimas Silverstring',
            //     'enedw_ith_enville | ael.jennngs@lala.com | Gael Jennings | Etrana | Merimas Silverstring',
            //     'weamy_xcit_ment | danella.richrds@lala.com | Daniella Richards | Chaoburg | Merimas Silverstring',
            //     'stro_glim_ic | sydee.kne@lala.com | Sydnee Kane | Bepriedan | Merimas Silverstring',
            //     'sowerb_r_ytick | morah.daidson@lala.com | Moriah Davidson | Bepriedan | Merimas Silverstring',
            //     'macaw_ube_ | hyann.wes@lala.com | Shyann West | Friatho | Merimas Silverstring',
            //     'revea_fr_nchy | aanda.htfield@lala.com | Amanda Hatfield | Uglax | Merimas Silverstring',
            //     'skants_or_upt | valeie.rch@lala.com | Valerie Rich | Bepriedan | Merimas Silverstring',
            //     'gann_the_am | wlliam.ross@lala.com | William Ross | Uglax | Merimas Silverstring',
            //     'fetchg_o_ty | seven.ndrews@lala.com | Steven Andrews | Friatho | Merimas Silverstring',
            //     'bitte_nexp_riment | skler.broks@lala.com | Skyler Brooks | Bepriedan | Merimas Silverstring',
            //     'umpire_pti_istic | lanen.galvn@lala.com | Landen Galvan | Hoshor | Merimas Silverstring',
            //     'swed_shnec_ | kai.lcero@lala.com | Kali Lucero | Etrana | Merimas Silverstring',
            //     'batter_yem_ni | asa.ardy@lala.com | Asia Hardy | Bepriedan | Merimas Silverstring',
            //     'tramp_li_ehoury | unnar.axwell@lala.com | Gunnar Maxwell | Etrana | Pepin Silentfoot',
            //     'norb_rtre_orm | pela.garnr@lala.com | Perla Garner | Chaoburg | Pepin Silentfoot',
            //     'hick_eteo_ojinx | gavn.tkins@lala.com | Gavin Atkins | Hoshor | Pepin Silentfoot',
            //     'himse_fted_ime | olly.illarreal@lala.com | Molly Villarreal | Friatho | Pepin Silentfoot',
            //     'brie_stap_ | arilla.ane@lala.com | Ariella Kane | Uglax | Pepin Silentfoot',
            //     'surm_seco_e | alter.bra@lala.com | Walter Bray | Uglax | Pepin Silentfoot',
            //     'wrest_ersa_oring | kia.soo@lala.com | Kira Soto | Etrana | Pepin Silentfoot',
            //     'surge_np_bster | haile.mrillo@lala.com | Hailee Murillo | Friatho | Pepin Silentfoot',
            //     'effi_ienc_buckwheat | naalee.morles@lala.com | Natalee Morales | Etrana | Pepin Silentfoot',
            //     'quoti_nt_unch | lanyn.terr@lala.com | Landyn Terry | Friatho | Pepin Silentfoot',
            //     'improv_flu_gers | alec.soto@lala.com | Alec Soto | Uglax | Pepin Silentfoot',
            //     'curec_ity_ootransport | jaet.care@lala.com | Janet Carey | Hoshor | Pepin Silentfoot',
            //     'ease_ot_ | rodrick.moye@lala.com | Roderick Moyer | Chaoburg | Pepin Silentfoot',
            //     'dobby_ir_e | atena.barett@lala.com | Athena Barnett | Hoshor | Pepin Silentfoot',
            //     'snicto_w_irr | on.err@lala.com | Jon Kerr | Friatho | Pepin Silentfoot',
            //     'cornea_ei_ht | kmeron.oyd@lala.com | Kameron Boyd | Bepriedan | Pepin Silentfoot',
            //     'cycl_fifth_ | arolyn.veazquez@lala.com | Carolyn Velazquez | Friatho | Pepin Silentfoot',
            //     'prac_ica_damaging | gabrelle.mcnil@lala.com | Gabrielle Mcneil | Bepriedan | Pepin Silentfoot',
            //     'scor_hedm_d | ryle.hoden@lala.com | Rylee Holden | Bepriedan | Pepin Silentfoot',
            //     'abrup_ago_izing | dam.soomon@lala.com | Adam Solomon | Hoshor | Pepin Silentfoot',
            //     'pand_qua_ified | maria.krueer@lala.com | Marina Krueger | Hoshor | Pepin Silentfoot',
            //     'invest_e_tsleauty | jamai.hawins@lala.com | Jamari Hawkins | Friatho | Pepin Silentfoot',
            //     'mimsy_to_ly | odney.keler@lala.com | Rodney Keller | Bepriedan | Pepin Silentfoot',
            //     'peps_opt_mal | raon.illiamson@lala.com | Ramon Williamson | Friatho | Pepin Silentfoot',

            // ]
            for (let i = 0; i < dataFromDb.length; i++) {
                const newElement = document.createElement('li');
                newElement.innerText = dataFromDb[i];

                fragment.appendChild(newElement);
            }

            let dataList = document.querySelector('#myMenu');
            dataList.appendChild(fragment); 
         }
        
        
        
        function myFunction() {
            document.getElementById("myMenu").innerHTML = '';
            
            let input, filter, ul, li, a, i, dev;
            input = document.getElementById('mySearch');
            filter = input.value.toLowerCase();
            dev = 0;
            
            //sending AJAX request
            const xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    let topFiveArray = JSON.parse(xmlhttp.responseText); 
                    console.log(topFiveArray);
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                addLi(topFiveArray);
                }
            }
            xmlhttp.open("GET","livesearch.php?q="+input.value+"&dev="+dev,true);
            xmlhttp.send();
            
            ul = document.getElementById('myMenu');
            li = ul.getElementsByTagName('li');
            
            if (filter == '') {
                for (i = 0; i < li.length; i++) {
                    li[i].classList.remove('w3-show');
                    li[i].classList.add('w3-hide');
                }
            } else {
                for (i = 0; i < li.length; i++) {
                    if (li[i].innerHTML.toLowerCase().indexOf(filter) > -1) {
                        
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
    <!-- <script> 
      document.addEventListener('DOMContentLoaded', addLi);
    </script> -->

    
	<script src="js/sideBar.js"></script>
</body>

</html>