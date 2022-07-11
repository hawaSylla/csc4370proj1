<?php
include("header.html");
include("gameInit.php");
session_start();
?>

<table>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><img src="<?php print $_SESSION['mysteryPerson']->get_pic() ?? null; ?>" alt="mystery person"></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td><img src="<?php print $_SESSION['randomPeople'][0]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][1]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][2]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][3]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][4]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][5]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][6]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][7]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][8]->get_pic() ?? null; ?>" alt="1"></td>
    </tr>
    <tr>
        <td><img src="<?php print $_SESSION['randomPeople'][9]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][10]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][11]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][12]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][13]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][14]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][15]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][16]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][17]->get_pic() ?? null; ?>" alt="1"></td>
        <td><img src="<?php print $_SESSION['randomPeople'][18]->get_pic() ?? null; ?>" alt="1"></td>
    </tr>
</table>



<form method="post" ; action="check.php">
    <p>Guess The...</p>
    <input type="radio" name=" Name" value="name"> Name<br>
    <input type="radio" name=" Gender" value="name"> Gender<br>
    <input type="radio" name=" Hair Length" value="name"> Hair Length<br>
    <input type="radio" name=" Hair Color" value="name"> Hair Color<br>
    <input type="radio" name=" Eye Color" value="name"> Eye Color<br>
    <input type="radio" name=" Eye Size" value="name"> Eye Size <br>

    <label for="Name">Guess The Name:</label>
    <select id="Name" name="name">
        <option value="null">null</option>
        <option value="alex">alex</option>
        <option value="alfred">alfred</option>
        <option value="anit">anit</option>
        <option value="anne">anne</option>
        <option value="bernard">bernard</option>
        <option value="bill">bill</option>
        <option value="charles">charles</option>
        <option value="claire">claire</option>
        <option value="david">david</option>
        <option value="eric">eric</option>
        <option value="frans">frans</option>
        <option value="george">george</option>
        <option value="herman">herman</option>
        <option value="joe">joe</option>
        <option value="maria">maria</option>
        <option value="max">max</option>
        <option value="paul">paul</option>
        <option value="peter">peter</option>
        <option value="phillip">phillip</option>
    </select>

    <label for="Gender">Guess The Gender:</label>
    <select id="Gender" name="Gender">
        <option value="true">Male</option>
        <option value="false">Female</option>
        <option value="null">null</option>
    </select>

    <label for="Hair">Guess The Hair Color:</label>
    <select id="HairColor" name="HairC">
        <option value="black">black</option>
        <option value="red">red</option>
        <option value="blonde">blonde</option>
        <option value="brown">brown</option>
        <option value="bald">bald</option>
        <option value="white">white</option>
        <option value="null">null</option>

    </select>

    <input type="submit">

<!--    
    $form->addOption('length', 'long', 'long', '', '');
    $form->addOption('length', 'short', 'Option 2', '', '');
    $form->addOption('length', 'null', '-', '', 'selected');
    $form->addSelect('length', 'Hair length', '');
    $form->addOption('eye_color', 'brown', 'brown', '', '');
    $form->addOption('eye_color', 'blue', 'Option 2', '', '');
    $form->addOption('eye_color', 'null', '-', '', 'selected');
    $form->addSelect('eye_color', 'Eye Color', '');
    $form->addOption('eye_size', 'large', 'large', '', '');
    $form->addOption('eye_size', 'small', 'small', '', '');
    $form->addOption('eye_size', 'null', '-', '', 'selected');
    $form->addSelect('eye_size', 'Eye Size', '');
    $form->addPlugin('formvalidation', '#fg-form', 'default', array('language' => 'en_US')); -->

</form>

<?php include("footer.html"); ?>