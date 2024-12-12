@extends('layouts.app')

@section('title')
    ebd-w02-Assignment
@endsection

@section('banner')
    <div class="container mx-auto text-center">
        <h1 class="text-2xl font-bold">Assignment</h1>
    </div>
@endsection

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold text-center mb-6">ตารางเรียน</h1>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-300 text-center">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="border border-gray-300 py-2 px-4">Day/Time</th>
                    <th class="border border-gray-300 py-2 px-4">8:00-9:00</th>
                    <th class="border border-gray-300 py-2 px-4">9:00-10:00</th>
                    <th class="border border-gray-300 py-2 px-4">10:00-11:00</th>
                    <th class="border border-gray-300 py-2 px-4">11:00-12:00</th>
                    <th class="border border-gray-300 py-2 px-4">12:00-13:00</th>
                    <th class="border border-gray-300 py-2 px-4">13:00-14:00</th>
                    <th class="border border-gray-300 py-2 px-4">14:00-15:00</th>
                    <th class="border border-gray-300 py-2 px-4">15:00-16:00</th>
                    <th class="border border-gray-300 py-2 px-4">16:00-17:00</th>
                    <th class="border border-gray-300 py-2 px-4">17:00-18:00</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bg-gray-200 font-bold border border-gray-300 py-2 px-4">จันทร์</td>
                    <td colspan="4" class="bg-blue-100 border border-gray-300 py-2 px-4">9023042, 1<br>การจัดการโครงการด้านเทคโนโลยี<br>425</td>
                    <td></td>
                    <td colspan="2" class="bg-blue-100 border border-gray-300 py-2 px-4">9023043, 1<br>การทำเหมืองข้อมูล<br>435</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="bg-gray-200 font-bold border border-gray-300 py-2 px-4">อังคาร</td>
                    <td colspan="10" class="border border-gray-300 py-2 px-4"></td>
                </tr>
                <tr>
                    <td class="bg-gray-200 font-bold border border-gray-300 py-2 px-4">พุธ</td>
                    <td colspan="7" class="border border-gray-300 py-2 px-4"></td>
                    <td colspan="3" class="bg-blue-100 border border-gray-300 py-2 px-4">9023998, 1<br>เตรียมสหกิจศึกษาทางเทคโนโลยีสารสนเทศ<br>36303</td>
                </tr>
                <tr>
                    <td class="bg-gray-200 font-bold border border-gray-300 py-2 px-4">พฤหัสบดี</td>
                    <td colspan="5" class="border border-gray-300 py-2 px-4"></td>
                    <td colspan="3" class="bg-blue-100 border border-gray-300 py-2 px-4">9023111, 1<br>อินเทอร์เน็ตสำหรับทุกสรรพสิ่ง<br>433</td>
                    <td colspan="2" class="border border-gray-300 py-2 px-4"></td>
                </tr>
                <tr>
                    <td class="bg-gray-200 font-bold border border-gray-300 py-2 px-4">ศุกร์</td>
                    <td colspan="5" class="border border-gray-300 py-2 px-4"></td>
                    <td colspan="3" class="bg-blue-100 border border-gray-300 py-2 px-4">9024051, 1<br>การพัฒนาอุตสาหกรรมอิเล็กทรอนิกส์<br>434</td>
                    <td colspan="2" class="border border-gray-300 py-2 px-4"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="text-sm text-gray-600 mt-4">* ข้อมูลปรากฏอยู่ในตารางเรียนประกอบด้วย รหัสวิชา, SEC, ชื่อวิชา, ห้องเรียน, Link Classroom และกลุ่มไลน์ ตามลำดับ</p>
</div>
@endsection

@section('footer')
<footer>
    <div>
        <p>© IT CSIT RBRU</p>
    </div>
</footer>
@endsection