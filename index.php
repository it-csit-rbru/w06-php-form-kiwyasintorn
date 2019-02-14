<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sect1">
            <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
            <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
            <label for="fname">ชื่อ</label><input type="text" name="fname">
            <label for="lname">นามสกุล</label><input type="text" name="lname"><br>
            <label for="program">สาขาวิชา</label>
            <select name="program">
                <option valulue="1">วิทยาการคอมพิวเตอร์</option>
                <option valulue="2">เทคโนโลยีสารสนเทศ</option>
                <option valulue="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                <option valulue="4">ภูมิสารสนเทศ</option>
                <option valulue="5">คอมพิวเตอร์ศึกษา</option>
            </select>
            <label for="faculty">คณะ</label>
            <select name="faculty">
                <option value="1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
                <option value="2">ครุศาสตร์</option>
            <label for="std_year">ชั้นปี</label>
            <input type="radio" name="std_year" value="1"><label>ปี 1</label>
            <input type="radio" name="std_year" value="1"><label>ปี 2</label>
            <input type="radio" name="std_year" value="1"><label>ปี 3</label>
            <input type="radio" name="std_year" value="1"><label>ปี 4</label>
            <input type="radio" name="std_year" value="1"><label>ปี 5</label><br>
        </fieldset>
        <fieldset>
            <legend>ส่วนที่ 2 ข้อมูลโครงการ</legend>
            <label for=prj_name_th>ชื่อโครงการ(ภาษาไทย)</label><br>
            <textarea type="textarea" name="prj_name_th" rows="5" style="width:250px;"></textarea>
            <br><label for="prj_name_en">ชื่อโครงการ(ภาษาอังกฤษ)</label><br>
            <textarea type="textarea" name="prj_name_en" rows="5" style="width:250px;"></textarea>
        <select name="prj_type">
            <option value="1">เกม</option>
            <option value="2">โปรแกรมเดสก์ทอป</option>
            <option value="3">โปรแกรมมือถือ</option>
            <label>เครื่องมือที่ใช้ในการพัฒนา</label>
                       <input type="checkbox" name="prj_tool[]" value="html"><label>HTML</label>
                       <input type="checkbox" name="prj_tool[]" value="css"><label>CSS</label>
                       <input type="checkbox" name="prj_tool[]" value="JavaScript"><label>JavaScript</label>
                       <input type="checkbox" name="prj_tool[]" value="Bootstrap"><label>Bootstrap</label>
                       <input type="checkbox" name="prj_tool[]" value="Material Design"><label>Material Design</label>
                       <input type="checkbox" name="prj_tool[]" value="Angular"><label>Angular</label>
                       <input type="checkbox" name="prj_tool[]" value="React"><label>React</label>
                       <input type="checkbox" name="prj_tool[]" value="PHP"><label>PHP</label>
                       <input type="checkbox" name="prj_tool[]" value="MySQL"><label>MySQL</label>
                       <input type="checkbox" name="prj_tool[]" value="CharJS"><label>CharJS</label><br>
                       <label>อาจารย์ที่ปรึกษา</label>
                       <select name="prj_advisor">
                               <option value="1">ผ.อ.บุญเรือน พฤษ์ศศิธร</option>
                               <option value="2">ผ.อ.ทิพย์วรรณ ฟูเฟื่อง</option>
                       </select>
           </fieldset>
           <br>

        <input type="submit">
    </form>
</body>
</html>