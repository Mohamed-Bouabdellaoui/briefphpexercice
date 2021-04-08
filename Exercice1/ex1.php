<?php
function capital($p){
    switch($p){
        case "france":
         return "paris";
         break;
         case "Allemagne":
            return "Berlin";
         break;

         case "Italie":
            return "Rome";
            break;
            case "Maroc":
                return "Rabat";
                break;
                case "Espagne":
                    return "Madrid";
                    break;
                    case "Portugal":
                        return "Lisbonne";
                        break;
                        case "Angleterre":
                            return "Londres";
                            break;
       
    
    default:
    return "blabla";

}
}
echo capital("Portugal");
?>