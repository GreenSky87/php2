<?php
require_once '../../engine/init.php';
	$countView = (int)$_POST['count_add']; 	// количество записей, получаемых за один раз
	$startIndex = (int)$_POST['count_show']; // с какой записи начать выборку
	
	// запрос к бд

    $products25 = getProducts25($mysqlConnect, $startIndex, $countView);

	if(empty($products25)){
		// если новостей нет
		echo json_encode(array(
			'result' 	=> 'finish'
		));
	}else{
		// если новости получили из базы, то свормируем html элементы
		// и отдадим их клиенту
		$html = "";

		foreach($products25 as $oneNews){
			$html .= '
				<div class="col-lg">
                        <div class="card mb-4 shadow-sm" style="display:block;">
                            <div class="card-header">
                               '.$oneNews['id'].'  '.$oneNews['name'].' '.$oneNews['price'].' $
                            </div>
                            <div style="text-align:center;padding-top:8px;overflow:hidden;">
                                <img class=""
                                     src="'.$oneNews['image'].'"
                                     alt="'.$oneNews['name'].'" style="height: 225px; "
                                     data-holder-rendered="true">
                            </div>
                            <div class="card-body">
                                <p class="card-text">'.$oneNews['short_description'].'</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="product.php?id='.$oneNews['id'].'" type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</a>
                                        <form method="post" action="/cart/add.php">
                                            <input type="hidden" name="product_id" value="'.$oneNews['id'].'">
                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Купить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			';
		}
		echo json_encode(array(
			'result' 	=> 'success',
			'html'		=> $html
		));
	}
?>
	