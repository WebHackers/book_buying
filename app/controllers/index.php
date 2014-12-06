<?php
	class Index extends Controller {
		
		public function index () {

			$book = array(
				'book_name' => 'Hadoop权威指南',
				'book_author' => '(美)Tom White',
				'book_price' => '￥99.99',
				'book_info' => '唯一全面深度解读Hadoop的权威指南，驰骋于云计算和大数据领域的通俗读本。“谁说大象不能跳舞？！——挑战互联网规模的数据存储与分析！”第2版2011年底发行，重印次数达13次，累计销量近3.5万册。',
				'rec_type' => '自选必读',
				'rec_reason' => '本书从Hadoop的缘起开始，由浅入深，结合理论和实践，全方位地介绍Hadoop这一高性能处理海量数据集的理想工具。',
				'rec_pub' => '2014-12-25',
				'favour' => '99'
			);

			$list = array($book,$book,$book,$book,$book,$book,$book,$book);

			if(true)
			{
				//$books = BookBasic::all();
				return View::make ('bookBuy.index', array('list' => $list));
			}
			else
			{
				return View::make('land.land');
			}

		}

		public function like()
		{
			$book_id = Input::get(book_id);
			if($book = BookBasic::find(book_id))
			{
				$book->like++;
				if($book->save())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function dislike()
		{
			$book_id = Input::get(book_id);
			if($book = BookBasic::find(book_id))
			{
				$book->dislike++;
				if($book->save())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}

?>
