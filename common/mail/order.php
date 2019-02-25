<div class="container">

    <table>
       <thead>
       <tr>
           <th>
           Ապրանք
           </th>
           <th>
               Գին
           </th>
           <th>
               Քանակ
           </th>
           <th>
               Ընդհանուր
           </th>
       </tr>
       </thead>

        <tbody style="border: 1px solid black;">
        <?php foreach ($mycart as $cart) { ?>
            <tr>
                <td width="350" style="border: 1px solid black ;border-collapse: collapse">
                    <?= $cart['product']['title']?>
                </td>
	            <?php if (!empty($cart['product']['sale_prise'])){?>
                    <td width="350" style="border: 1px solid black ;"><?=$cart['product']['sale_prise']?> Դ</td>
		            <?php
	            }else{ ?>

                    <td width="350" style="border: 1px solid black ;"><?=$cart['product']['prise']?> Դ</td>
		            <?php
	            }?>
                <td width="350" style="border: 1px solid black ;">
                    <?=$cart['quantity']?>
                </td>

	            <?php if (!empty($cart['product']['sale_prise'])){?>
                    <td width="350" style="border: 1px solid black ;"><?= ( $cart['product']['sale_prise'] * $cart['quantity'] ) ?>Դ</td>
		            <?php
	            }else{ ?>

                    <td width="350" style="border: 1px solid black ;"><?= ( $cart['product']['price'] * $cart['quantity'] ) ?>  Դ</td>
		            <?php
	            }?>
            </tr>
	        <?php
        }
        ?>
        </tbody>
    </table>
</div>
