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

        <tbody>
        <?php foreach ($mycart as $cart) { ?>
            <tr>
                <td>
                    <?= $cart['product']['title']?>
                </td>
	            <?php if (!empty($cart['product']['sale_prise'])){?>
                    <td><?=$cart['product']['sale_prise']?> Դ</td>
		            <?php
	            }else{ ?>

                    <td><?=$cart['product']['prise']?> Դ</td>
		            <?php
	            }?>
                <td>
                    <?=$cart['product']['quantity']?>
                </td>

	            <?php if (!empty($cart['product']['sale_prise'])){?>
                    <td><?= ( $cart['product']['sale_prise'] * $cart['quantity'] ) ?>Դ</td>
		            <?php
	            }else{ ?>

                    <td><?= ( $cart['product']['price'] * $cart['quantity'] ) ?>  Դ</td>
		            <?php
	            }?>
            </tr>
	        <?php
        }
        ?>
        </tbody>
    </table>
</div>