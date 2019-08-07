@include('SpMrt.layout.head')

@include('SpMrt.layout.header')

<a class="btn btn-secondary" href="SpMrt.DB_list">DB list</a>

<div class="mx-auto">
    <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
            <tr class="bg-orange-800">
                <th class="py-4 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Column</th>
                <th class="py-4 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">data</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-teal-100">
                <td class="py-2 px-2 border-2 border-teal-500">姓</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->Chinese_sei}}</a>
                </td>
            </tr>
            <tr class="bg-orange-100">
                <td class="py-2 px-2 border-2 border-orange-500">名</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->Chinese_mei}}</a>
                </td>
            </tr>
            <tr class="bg-teal-100">
                <td class="py-2 px-2 border-2 border-teal-500">セイ</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->Japanese_sei}}</a>
                </td>
            </tr>
            <tr class="bg-orange-100">
                <td class="py-2 px-2 border-2 border-orange-500">メイ</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->Japanese_mei}}</a>
                </td>
            </tr>
            <tr class="bg-teal-100">
                <td class="py-2 px-2 border-2 border-teal-500">性別</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{Config("const.gender.$data_sp_mrt->gender")}}</a>
                </td>
            </tr>
            <tr class="bg-orange-100">
                <td class="py-2 px-2 border-2 border-orange-500">eメール</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->email}}</a>
                </td>
            </tr>
            <tr class="bg-teal-100">
                <td class="py-2 px-2 border-2 border-teal-500">パスワード</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{$data_sp_mrt->password}}</a>
                </td>
            </tr>
            <tr class="bg-orange-100">
                <td class="py-2 px-2 border-2 border-orange-500">出身大学</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{Config("const.university.$data_sp_mrt->university")}}</a>
                </td>
            </tr>
            <tr class="bg-teal-100">
                <td class="py-2 px-2 border-2 border-teal-500">卒業年度</td>
                <td class="py-2 px-2 border-2 border-grey-light">
                    <a href="#" class="text-grey-lighter font-bold py-1 rounded text-xs bg-green">{{Config("const.graduation_year.$data_sp_mrt->graduation_year")}}</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@include('SpMrt.layout.footer')
