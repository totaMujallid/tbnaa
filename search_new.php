<form action="blank" method="post">

                    
<fieldset id="inputs">
<div id="boxtext">
<div id="halfboxR">
<div id="webtext">الاسم</div>
<div id="cattext"><input class="name" name="name" style="width: 136px;" placeholder="" /></div>
</div>

<div id="halfboxL">
<div id="webtext">الفصيلة</div>
<select class="kinds" name="kind">
	<option value="all">الكل</option>
	<option value="شيرازي">شيرازي</option>
	<option value="فيس مون">فيس مون</option>
	<option value="كيتي">كيتي</option>
	<option value="أمريكي">أمريكي</option>
</select>
</div> <!--"halfboxL" End-->
</div> <!--"boxtext" End-->

<div id="boxtext"> 
<div id="longbar">
<div id="webtextlong">التطعيم</div>
<div id="cattextlong">
	<label class="radio"><input type="radio" name="health" id="optionsRadios1" value="مطعمة" />مطعمة</label>
	<label class="radio"><input type="radio" name="health" id="optionsRadios2" value="غير مطعمة" />غير مطعمة</label>
</div> 
</div>
</div>

<div id="boxtext">
<div id="longbar">
<div id="webtextlong">العمر</div>
<div id="cattextlong">
<select class="old" name="old">
	<option value="all"></option>
	<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								<label class="radio"> <input type="radio" name="unit" id="optionsRadios1" value="سنة" > سنة</label>
								<label class="radio"><input type="radio" name="unit" id="optionsRadios2" value="شهور" > شهور</label> 
</div> 
</div>
</div>

<div id="boxtext">
<div id="halfboxR">
<div id="webtext">المنطقة</div>
<select class="place" name="city">
										<option value="all">الكل</option>
										<option value="الدمام">الدمام</option>
										<option value="الخبر">الخبر</option>
										<option value="الجبيل">الجبيل</option>
										<option value="الرياض">الرياض</option>
										<option value="المدينة">المدينة</option>
										<option value="مكة">مكة</option>
										<option value="جدة">جدة</option>
										<option value="الأحساء">الأحساء</option>
										<option value="ينبع">ينبع</option>
										<option value="القصيم">القصيم</option>
										</select> 
</div> 
<div id="halfboxL">
<div id="webtext">الجنس</div>
<div id="cattext">
<label class="radio"><input type="radio" name="sex" id="optionsRadios1" value="ذكر" > ذكر</label>
<label class="radio"><input type="radio" name="sex" id="optionsRadios2" value="أنثى" > انثى</label>
</div> 
</div> 
</div>
</fieldset>
<fieldset id="actions">
<div id="centeradd">
			<input type="submit" id="submit" name="doSearch" value="بحث" />
		</div>
</fieldset>

</form>