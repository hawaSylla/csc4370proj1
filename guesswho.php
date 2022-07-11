<?php include("header.html"); ?>

    <table>
        <tr>
            <th></th>
            <th></th>
            <th><img src="<?php print $mysteryPerson->get_pic() ?? null; ?>" alt="mystery person"></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td><img src="<?php print $randomPeople[0]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[1]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[2]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[3]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[4]->get_pic() ?? null; ?>" alt="1"></td>
        </tr>
        <tr>
            <td><img src="<?php print $randomPeople[5]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[6]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[7]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[8]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[9]->get_pic() ?? null; ?>" alt="1"></td>
        </tr>
        <tr>
            <td><img src="<?php print $randomPeople[10]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[11]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[12]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[13]->get_pic() ?? null; ?>" alt="1"></td>
            <td><img src="<?php print $randomPeople[14]->get_pic() ?? null; ?>" alt="1"></td>
        </tr>
    </table>

<?php include("footer.html"); ?>