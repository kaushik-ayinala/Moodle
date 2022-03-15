<?php

class block_aislavatarcreatorblock extends block_base
{
    public function init()
    {
        $this->title = get_string('aislavatarcreatorblock', 'block_aislavatarcreatorblock');
    }
    // The PHP tag and the curly bracket for the class definition
    // will only be closed after there is another function added in the next section.
    public function get_content()
    {
        if ($this->content !== null) {
            return $this->content;
        }

        function getTheModel()
        {
            return <<<HTML
<html>
<head>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>
    <link rel=”stylesheet” href=”https://unpkg.com/material-components-web/dist/material-components-web.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root {
            --bg-light: #f0f0f0;
            --bg-light-shadow: #FCFCFC;
            --bg-dark-shadow: #CCCCCC;
            --secondary-color: #000000;
            --font-color: #000;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg-light);
            --font-color: var(--font-color);
        }


        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */

            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: var(--bg-light);
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 50vh;
            padding-left: 10%;
            padding-right: 10%;
        }


        .select_box {
            -webkit-box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.2);
            background-color: var(--bg-light);
        }


        option {
            background-color: var(--bg-light);

        }

        .select_box:enabled {
            background-color: var(--bg-light);
        }

    </style>
</head>
<body>

<h2>Avatar Creator</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="center-screen">
            <img alt=""
                 src="https://avataaars.io/?avatarStyle=Transparent&topType=LongHairBob&accessoriesType=Blank&facialHairType=Blank&clotheType=ShirtCrewNeck&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Brown"
                 style="height: 256px; width: 256px" id="primaryImage"/>

            <label for="topType">Top</label>
            <select onchange="changeImage()" id="topType" class="form-control select_box">
                <option value="NoHair">NoHair</option>
                <option value="Eyepatch">Eyepatch</option>
                <option value="Hat">Hat</option>
                <option value="Hijab">Hijab</option>
                <option value="Turban">Turban</option>
                <option value="WinterHat1">WinterHat1</option>
                <option value="WinterHat2">WinterHat2</option>
                <option value="WinterHat3">WinterHat3</option>
                <option value="WinterHat4">WinterHat4</option>
                <option value="LongHairBigHair">LongHairBigHair</option>
                <option selected value="LongHairBob">LongHairBob</option>
                <option value="LongHairBun">LongHairBun</option>
                <option value="LongHairCurly">LongHairCurly</option>
                <option value="LongHairCurvy">LongHairCurvy</option>
                <option value="LongHairDreads">LongHairDreads</option>
                <option value="LongHairFrida">LongHairFrida</option>
                <option value="LongHairFro">LongHairFro</option>
                <option value="LongHairFroBand">LongHairFroBand</option>
                <option value="LongHairNotTooLong">LongHairNotTooLong</option>
                <option value="LongHairShavedSides">LongHairShavedSides</option>
                <option value="LongHairMiaWallace">LongHairMiaWallace</option>
                <option value="LongHairStraight">LongHairStraight</option>
                <option value="LongHairStraight2">LongHairStraight2</option>
                <option value="LongHairStraightStrand">LongHairStraightStrand</option>
                <option value="ShortHairDreads01">ShortHairDreads01</option>
                <option value="ShortHairDreads02">ShortHairDreads02</option>
                <option value="ShortHairFrizzle">ShortHairFrizzle</option>
                <option value="ShortHairShaggyMullet">ShortHairShaggyMullet</option>
                <option value="ShortHairShortCurly">ShortHairShortCurly</option>
                <option value="ShortHairShortFlat">ShortHairShortFlat</option>
                <option value="ShortHairShortRound">ShortHairShortRound</option>
                <option value="ShortHairShortWaved">ShortHairShortWaved</option>
                <option value="ShortHairSides">ShortHairSides</option>
                <option value="ShortHairTheCaesar">ShortHairTheCaesar</option>
                <option value="ShortHairTheCaesarSidePart">ShortHairTheCaesarSidePart</option>
            </select>

            <label for="accessoriesType">Accessories</label>
            <select onchange="changeImage()" id="accessoriesType" class="form-control select_box">
                <option selected value="Blank">Blank</option>
                <option value="Kurt">Kurt</option>
                <option value="Prescription01">Prescription01</option>
                <option value="Prescription02">Prescription02</option>
                <option value="Round">Round</option>
                <option value="Sunglasses">Sunglasses</option>
                <option value="Wayfarers">Wayfarers</option>
            </select>

            <label for="facialHairType">Facial Hair</label>
            <select onchange="changeImage()" id="facialHairType" class="form-control select_box">
                <option selected value="Blank">Blank</option>
                <option value="BeardMedium">BeardMedium</option>
                <option value="BeardLight">BeardLight</option>
                <option value="BeardMagestic">BeardMagestic</option>
                <option value="MoustacheFancy">MoustacheFancy</option>
                <option value="MoustacheMagnum">MoustacheMagnum</option>
            </select>

            <label for="clotheType">Clothes</label>
            <select onchange="changeImage()" id="clotheType" class="form-control select_box">
                <option value="BlazerShirt">BlazerShirt</option>
                <option value="BlazerSweater">BlazerSweater</option>
                <option value="CollarSweater">CollarSweater</option>
                <option value="GraphicShirt">GraphicShirt</option>
                <option value="Hoodie">Hoodie</option>
                <option value="Overall">Overall</option>
                <option selected value="ShirtCrewNeck">ShirtCrewNeck</option>
                <option value="ShirtScoopNeck">ShirtScoopNeck</option>
                <option value="ShirtVNeck">ShirtVNeck</option>
            </select>

            <label for="eyeType">Eyes</label>
            <select onchange="changeImage()" id="eyeType" class="form-control select_box">
                <option value="Close">Close</option>
                <option value="Cry">Cry</option>
                <option selected value="Default">Default</option>
                <option value="Dizzy">Dizzy</option>
                <option value="EyeRoll">EyeRoll</option>
                <option value="Happy">Happy</option>
                <option value="Hearts">Hearts</option>
                <option value="Side">Side</option>
                <option value="Squint">Squint</option>
                <option value="Surprised">Surprised</option>
                <option value="Wink">Wink</option>
                <option value="WinkWacky">WinkWacky</option>
            </select>

            <label for="eyebrowType">Eyebrow</label>
            <select onchange="changeImage()" id="eyebrowType" class="form-control select_box">
                <option value="Angry">Angry</option>
                <option value="AngryNatural">AngryNatural</option>
                <option selected value="Default">Default</option>
                <option value="DefaultNatural">DefaultNatural</option>
                <option value="FlatNatural">FlatNatural</option>
                <option value="RaisedExcited">RaisedExcited</option>
                <option value="RaisedExcitedNatural">RaisedExcitedNatural</option>
                <option value="SadConcerned">SadConcerned</option>
                <option value="SadConcernedNatural">SadConcernedNatural</option>
                <option value="UnibrowNatural">UnibrowNatural</option>
                <option value="UpDown">UpDown</option>
                <option value="UpDownNatural">UpDownNatural</option>
            </select>

            <label for="mouthType">Mouth</label>
            <select onchange="changeImage()" id="mouthType" class="form-control select_box">
                <option value="Concerned">Concerned</option>
                <option selected value="Default">Default</option>
                <option value="Disbelief">Disbelief</option>
                <option value="Eating">Eating</option>
                <option value="Grimace">Grimace</option>
                <option value="Sad">Sad</option>
                <option value="ScreamOpen">ScreamOpen</option>
                <option value="Serious">Serious</option>
                <option value="Smile">Smile</option>
                <option value="Tongue">Tongue</option>
                <option value="Twinkle">Twinkle</option>
                <option value="Vomit">Vomit</option>
            </select>

            <label for="skinColor">Skin</label>
            <select onchange="changeImage()" id="skinColor" class="form-control select_box">
                <option value="Tanned">Tanned</option>
                <option value="Yellow">Yellow</option>
                <option value="Pale">Pale</option>
                <option value="Light">Light</option>
                <option selected value="Brown">Brown</option>
                <option value="DarkBrown">DarkBrown</option>
                <option value="Black">Black</option>
            </select>


        </div>
    </div>

</div>

<script>
    function changeImage() {
        let tt = document.getElementById('topType');
        let at = document.getElementById('accessoriesType');
        let fht = document.getElementById('facialHairType');
        let ct = document.getElementById('clotheType');
        let et = document.getElementById('eyeType');
        let ebt = document.getElementById('eyebrowType');
        let mt = document.getElementById('mouthType');
        let sc = document.getElementById('skinColor');

        let urlStr = 'https://avataaars.io/?avatarStyle=Transparent';

        urlStr = urlStr.concat('&topType=' + tt.options[tt.selectedIndex].value);
        urlStr = urlStr.concat('&accessoriesType=' + at.options[at.selectedIndex].value);
        urlStr = urlStr.concat('&facialHairType=' + fht.options[fht.selectedIndex].value);
        urlStr = urlStr.concat('&clotheType=' + ct.options[ct.selectedIndex].value);
        urlStr = urlStr.concat('&eyeType=' + et.options[et.selectedIndex].value);
        urlStr = urlStr.concat('&eyebrowType=' + ebt.options[ebt.selectedIndex].value);
        urlStr = urlStr.concat('&mouthType=' + mt.options[mt.selectedIndex].value);
        urlStr = urlStr.concat('&skinColor=' + sc.options[sc.selectedIndex].value);

        document.getElementById("primaryImage").src = urlStr;

    }


    // Get the modal
    let modal = document.getElementById("myModal");

    // Get the button that opens the modal
    let btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
HTML;
        }


        $this->content = new stdClass;
        $this->content->text = '';
        if (!empty($this->config->text)) {
            $this->content->text = $this->config->text;
        }
        $this->content->text = getTheModel();
        //global $COURSE;


        //$url = new moodle_url('/blocks/aislavatarcreatorblock/view.php', array('blockid' => $this->instance->id, 'courseid' => $COURSE->id));
        $this->content->footer = '';


        return $this->content;
    }

    public function specialization()
    {
        if (isset($this->config)) {
            if (empty($this->config->title)) {
                $this->title = get_string('defaulttitle', 'block_aislavatarcreatorblock');
            } else {
                $this->title = $this->config->title;
            }

            if (empty($this->config->text)) {
                $this->config->text = get_string('defaulttext', 'block_aislavatarcreatorblock');
            }
        }
    }

    public function instance_allow_multiple()
    {
        return true;
    }

    function has_config()
    {
        return true;
    }

    public function instance_config_save($data, $nolongerused = false)
    {
        if (get_config('aislavatarcreatorblock', 'Allow_HTML') == '1') {
            $data->text = strip_tags($data->text);
        }

        // And now forward to the default implementation defined in the parent class
        return parent::instance_config_save($data, $nolongerused);
    }

    public function hide_header()
    {
        return true;
    }


    public function applicable_formats()
    {
        return array('profile' => true);
    }
}
