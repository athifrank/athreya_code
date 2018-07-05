/**
 * Created by Shabeer on 4/25/2017.
 */


	var app=angular.module('app',[]);
	app.controller('myctrl',['$scope',function ($scope) {
		$scope.laws=[
			{
				Name:'Family Law'
			},
			{
				Name:'Banking and Finance'
			},
			{
				Name:'Pharma and Health Care'
			},
			{
				Name:'Infrastructure'
			},{Name:'Real Estate'},{Name:'Corporate Law'},{Name:'Intellectual Property'},{Name:'Taxation'},{Name:'Litigation and Dispute Resolution'}
			,{Name:'Start-ups'},{Name:'Research and Opinion'},{Name:'Ecommerce'},{Name:'Information Technology'},{Name:'Telecommunication'}
			,{Name:'NRI Services'},{Name:'Immigration Services'},{Name:'Employment'}
		]
	}])


