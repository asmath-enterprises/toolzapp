<div class="row clearfix">
    <div class="col_half">
        <label> Your name
            [text* your-name] </label>
    </div>
    <div class="col_half" style="padding-left: 15px;">
        <label> Your email
            [email* your-email] </label>
    </div>
</div>

<label>PhoneNumber
    [phonetext PhoneNumber]</label>
<div class="row clearfix">
    <div class="col_half">
        <label> Country
            [select Country id:country]</label>
    </div>
    <div class="col_half" style="padding-left: 15px;">
        <label> Region
            [select Region id:state]</label>
    </div>
</div>
<div class="row clearfix">
    <div class="col_half">
        <label> City
            [select City id:city]</label>
    </div>
    <div class="col_half" style="padding-left: 15px;">
        <label> Citizenship
            [select citizenship include_blank "B1" "Can work for any employer" "Can work for a current employer"
            "Candidain Citizen" "CTGR" "EAEA" "EATN" "Employment Authorization Document" "EU Eligible" "EUAY" "Green
            Card" "H1 B" "H1 Visa" "L1-A" "L1-B" "L2-EAD" "Need H1 Visa" "Not Specified" "OPT EAD" "Seeking work
            authorization" "Sponsorship Required" "TN Permit Holder" "TN Visa" "US Authorized" "US Citizen"] </label>
    </div>
</div>
<label> Employment Field
    [select EmploymentField include_blank "IT" "Engineering" "Sales" "Administrative" "Other"]</label>

<label> Desired Job Title
    [textarea your-message] </label>

[submit "Submit"]