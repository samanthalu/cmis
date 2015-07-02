
<div ng-controller="viewController as view">
	<table border="1">
		<thead>
		<th>
			ID
		</th>
			<th>
				First Name
			</th>
			<th>
				Last Name
			</th>
			<th>
				Email
			</th>
			<th>
				DOB
			</th>
			<th>
				Address
			</th>
			<th>
				Action
			</th>
		</thead>

		<tr ng-repeat="row in member">
			<td>
				{{row.memberID}}
			</td>
			<td>
				{{row.memberFirstName}}
			</td>
			<td>
				{{row.memberLastName}}
			</td>
			<td>
				{{row.memberEmail}}
			</td>
			<td>
				{{row.memberDOB}}
			</td>
			<td>
				{{row.memberAddress}}
			</td>
			<td>
				<a href="#view_member/{{row.memberID}}">View</a> | Edit | Delete
			</td>
		</tr>
	</table>
</div>