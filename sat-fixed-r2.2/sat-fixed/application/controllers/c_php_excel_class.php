<?php
class c_php_excel_class extends CI_Controller{

	private $objPHPExcel;
	private $namaMK;
	public function __construct(){
		parent::__construct();
		$this->load->library('PHPXl');
		$this->load->helper('date');
		$this->objPHPExcel = new PHPExcel();
		$this->namaMK = $this->input->post('mk');
	}
	public function setPaperLayout(){
		$this->objPHPExcel->setActiveSheetIndex(0);
		$this->objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$this->objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		$this->objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
		$this->objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
		$this->objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
	}
	public function setCellWidth(){
		$this->objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
		$this->objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
		$this->objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(45);
		$this->objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
	}
	public function getBorderTable($rangeAwal, $rangeAkhir){
		$BStyle = array(
		  'borders' => array(
			'allborders' => array(
			  'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		  )
		);


		$this->objPHPExcel->getActiveSheet()->getStyle('A'.$rangeAwal.':A'.$rangeAkhir)->applyFromArray($BStyle);
		$this->objPHPExcel->getActiveSheet()->getStyle('B'.$rangeAwal.':B'.$rangeAkhir)->applyFromArray($BStyle);
		$this->objPHPExcel->getActiveSheet()->getStyle('C'.$rangeAwal.':C'.$rangeAkhir)->applyFromArray($BStyle);
		$this->objPHPExcel->getActiveSheet()->getStyle('D'.$rangeAwal.':D'.$rangeAkhir)->applyFromArray($BStyle);
	}
	public function getFontType($range){
		$styleArray = array(
			'font'  => array(
				'bold'  => true,
				'color' => array('rgb' => '000000'),
				'size'  => 15,
				'name'  => 'Times New Roman'
			));

		$this->objPHPExcel->getActiveSheet()->getStyle($range)->applyFromArray($styleArray);
	}
	public function setSizeFont($colomn){
		$styleArray = array(
			'font'  => array(
				'size'  => 12,
				'name'  => 'Times New Roman'
			));

		$this->objPHPExcel->getActiveSheet()->getStyle($colomn)->applyFromArray($styleArray);
	}
	public function setValues($index, $nomorkol, $value){
		$this->objPHPExcel->getActiveSheet()->setCellValueExplicit($nomorkol.$index, $value,PHPExcel_Cell_DataType::TYPE_STRING);
	}
	public function getCurrentDateTime(){
		$datestring = '%Y-%m-%d';
		$time = time();
		$tgl_register = mdate($datestring,$time);
		return $tgl_register;
	}
	public function setAlignLeft($colomn){
		$this->objPHPExcel->getActiveSheet()
		->getStyle($colomn)
		->getAlignment()
		->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	}
	public function setAlignCenter($colomn){
		$this->objPHPExcel->getActiveSheet()
		->getStyle($colomn)
		->getAlignment()
		->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	}
	public function setCellType($range){
		$this->objPHPExcel->getActiveSheet()
		->getStyle($range)
		->getNumberFormat()
		->setFormatCode(
        PHPExcel_Style_NumberFormat::FORMAT_TEXT
    );
	}
	public function getNomorTable($nomorStart, $nomorAkhir, $halaman){
		if($halaman==1)
		{
		for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			$this->setValues($i+7, 'A', $i);
			}
		}
		else if($halaman==2)
		{
			for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			$this->setValues($i+19, 'A', $i);
			}
		}
		else if($halaman==3)
		{
			for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			$this->setValues($i+31, 'A', $i);
			}
		}
	}
	public function getNomorTandaTangan($nomorStart,$nomorAkhir,$halaman){
		if($halaman==1)
		{
		for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			if($i%2!=0){
				$this->setAlignLeft('D'.($i+7));
			}
			if($i%2==0){
				$this->setAlignCenter('D'.($i+7));
			}
			$this->setValues($i+7, 'D', $i);
			}
		}
		else if($halaman==2)
		{
			for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			if($i%2!=0){
				$this->setAlignLeft('D'.($i+19));
			}
			if($i%2==0){
				$this->setAlignCenter('D'.($i+19));
			}
			$this->setValues($i+19, 'D', $i);
			}
		}
		else if($halaman==3)
		{
			for($i=$nomorStart;$i<=$nomorAkhir;$i++){
			if($i%2!=0){
				$this->setAlignLeft('D'.($i+31));
			}
			if($i%2==0){
				$this->setAlignCenter('D'.($i+31));
			}
			$this->setValues($i+31, 'D', $i);
			}
		}
	}
	public function getNamaPenutor($halaman){
		if($halaman==1)
		{
		$tgl=$this->getCurrentDateTime();
		$this->setValues(28,'D',$tgl);
		$this->setValues(29,'D',"Penutor Mata Kuliah");
		$this->setValues(31,'D',"Kenny Everest Karnama");
		$this->setAlignCenter('D28:D31');
		}
		else if($halaman==2)
		{
		$tgl=$this->getCurrentDateTime();
		$this->setValues(59,'D',$tgl);
		$this->setValues(60,'D',"Penutor Mata Kuliah");
		$this->setValues(62,'D',"Kenny Everest Karnama");
		$this->setAlignCenter('D59:D62');
		}
		else if($halaman==3)
		{
		$tgl=$this->getCurrentDateTime();
		$this->setValues(90,'D',$tgl);
		$this->setValues(91,'D',"Penutor Mata Kuliah");
		$this->setValues(93,'D',"Kenny Everest Karnama");
		$this->setAlignCenter('D59:D62');
		}
		}
	public function setHeader($halaman){
		if($halaman==1)
		{
		$this->setPaperLayout();
		$this->setCellWidth();
		$this->getBorderTable(7,26);
		$this->getFontType('C1:C2');
		$this->setCellType('B7:B26');
		$this->setValues(1,'C',"Absensi Tutorial HIMSI FST Universitas Airlangga");
		$this->setValues(2,'C',"Semester Genap Tahun Ajaran 2015/2016");
		$tgl=$this->getCurrentDateTime();
		$this->setValues(4,'B',"Tanggal : ".$tgl);
		$matkul=$this->namaMK;
		$this->setValues(5,'B',"Mata Kuliah : ".$matkul);
		$this->setAlignCenter('A7:D7');
		$this->setAlignCenter('C1:C2');
		$this->setSizeFont('B4:B5');
		$this->setSizeFont('A7:D7');
		}
		else if($halaman==2)
		{
		$this->setPaperLayout();
		$this->setCellWidth();
		$this->getBorderTable(38,57);
		$this->getFontType('C32:C33');
		$this->setCellType('B38:B57');
		$this->setValues(32,'C',"Absensi Tutorial HIMSI FST Universitas Airlangga");
		$this->setValues(33,'C',"Semester Genap Tahun Ajaran 2015/2016");
		$tgl=$this->getCurrentDateTime();
		$this->setValues(35,'B',"Tanggal : ".$tgl);
		$matkul="Struktur Data";
		$this->setValues(36,'B',"Mata Kuliah : ".$matkul);
		$this->setAlignCenter('A38:D38');
		$this->setAlignCenter('C32:C33');
		$this->setSizeFont('B35:B36');
		$this->setSizeFont('A38:D38');
		}
		else if($halaman==3)
		{
		$this->setPaperLayout();
		$this->setCellWidth();
		$this->getBorderTable(69,88);
		$this->getFontType('C63:C64');
		$this->setCellType('B69:B88');
		$this->setValues(63,'C',"Absensi Tutorial HIMSI FST Universitas Airlangga");
		$this->setValues(64,'C',"Semester Genap Tahun Ajaran 2015/2016");
		$tgl=$this->getCurrentDateTime();
		$this->setValues(66,'B',"Tanggal : ".$tgl);
		$matkul="Struktur Data";
		$this->setValues(67,'B',"Mata Kuliah : ".$matkul);
		$this->setAlignCenter('A69:D69');
		$this->setAlignCenter('C63:C64');
		$this->setSizeFont('B66:B67');
		$this->setSizeFont('A69:D69');
		}
			}
	public function setTable($halaman,$angkatan){
		$this->load->model('/tabel/mahasiswamodel');
		$hasil=$this->mahasiswamodel->getAngkatan($angkatan);
		$list_nim=array ();
		$list_nama=array ();
		$i=0;
		$j=0;
		foreach ($hasil->result_array() as $a)
		{
			$list_nim[$i++]=$a['nim'];
			$list_nama[$j++]=$a['nama'];
		}
		$x=0;
		$batas = count($list_nim);
		echo $batas;
		while($x<$batas)
		{
			if($x>=0&&$x<19)
			{
				$this->setValues(($x+8),'A',($x+1));
				$this->setValues(($x+8),'B',$list_nim[$x]);
				$this->setValues(($x+8),'C',$list_nama[$x]);
				$this->setValues(($x+8),'D',($x+1));
				if($x%2!=0)
				{
				$this->setAlignCenter('D'.($x+8));
				}
			}
			if($x>=19&&$x<38)
			{
				$this->setValues(($x+20),'A',($x+1));
				$this->setValues(($x+20),'B',$list_nim[$x]);
				$this->setValues(($x+20),'C',$list_nama[$x]);
				$this->setValues(($x+20),'D',($x+1));
				if($x%2!=0)
				{
					$this->setAlignCenter('D'.($x+20));
				}
			}
			if($x>=38&&$x<57)
			{
				$this->setValues(($x+32),'A',($x+1));
				$this->setValues(($x+32),'B',$list_nim[$x]);
				$this->setValues(($x+32),'C',$list_nama[$x]);
				$this->setValues(($x+32),'D',($x+1));
				if($x%2!=0)
				{
					$this->setAlignCenter('D'.($x+32));
				}
			}
			$x++;

		}
		$this->setValues(7,'A','No.');
		$this->setValues(7,'B',"NIM");
		$this->setValues(7,'C','Nama');
		$this->setValues(7,'D','Tanda Tangan');
		$this->setAlignLeft('C8:C26');
		$this->setAlignCenter('A8:B26');
		$this->setSizeFont('A8:D26');
		$this->setValues(38,'A','No.');
		$this->setValues(38,'B',"NIM");
		$this->setValues(38,'C','Nama');
		$this->setValues(38,'D','Tanda Tangan');
		$this->setAlignLeft('C39:C57');
		$this->setAlignCenter('A39:B57');
		$this->setSizeFont('A39:D57');
		$this->setValues(69,'A','No.');
		$this->setValues(69,'B',"NIM");
		$this->setValues(69,'C','Nama');
		$this->setValues(69,'D','Tanda Tangan');
		$this->setAlignLeft('C70:C88');
		$this->setAlignCenter('A70:B88');
		$this->setSizeFont('A70:D88');
	}
	public function setFooter($halaman){
		if($halaman==1)
		{
		$this->getNamaPenutor($halaman);
		$this->setSizeFont('A28:D31');
		$this->setAlignCenter('A28:D31');
		}
		else if($halaman==2)
		{
		$this->getNamaPenutor($halaman);
		$this->setSizeFont('A59:D62');
		$this->setAlignCenter('A59:D62');
		}
		else if($halaman==3)
		{
		$this->getNamaPenutor($halaman);
		$this->setSizeFont('A90:D93');
		$this->setAlignCenter('A90:D93');
		}
	}

	public function index(){
		echo "Start!";
		$sT = microtime(1);
		$this->setHeader(1);
		$this->setTable(1,2015);
		$this->setFooter(1);
		$this->setHeader(2);
		$this->setTable(2,2014);
		$this->setFooter(2);
		$this->setHeader(3);
		$this->setTable(3,2014);
		$this->setFooter(3);

	$objWriter = IOFactory::createWriter($this->objPHPExcel, 'Excel5');
	$fileName = "absen_tutor_".$this->namaMK.".xls";
	$objWriter->save($fileName);
	/**/
	echo "<br />";
	echo "Done!".date('Y-m-d H:i:s');
	echo "<br />";

	$eT = microtime(1);

	var_dump(($eT - $sT), memory_get_usage(1), memory_get_peak_usage(1));
	}
}
?>
