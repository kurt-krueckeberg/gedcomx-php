<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Types;

/**
 * Enumeration of standard fact types.
 */
class FactType
{

    /**
     *  A fact of a person's adoption. In the context of a parent-child relationship, it describes a fact of the adoption of a child by a parent.
     */
    const ADOPTION = "http://gedcomx.org/Adoption";

    /**
     *  A fact of a person's christening as an adult.
     */
    const ADULTCHRISTENING = "http://gedcomx.org/AdultChristening";

    /**
     *  A fact of a person's amnesty.
     */
    const AMNESTY = "http://gedcomx.org/Amnesty";

    /**
     *  A fact of a person's apprenticeship.
     */
    const APPRENTICESHIP = "http://gedcomx.org/Apprenticeship";

    /**
     *  A fact of a person's arrest.
     */
    const ARREST = "http://gedcomx.org/Arrest";

    /**
     *  A fact of a person's baptism.
     */
    const BAPTISM = "http://gedcomx.org/Baptism";

    /**
     *  A fact of a person's bar mitzvah.
     */
    const BARMITZVAH = "http://gedcomx.org/BarMitzvah";

    /**
     *  A fact of a person's bat mitzvah.
     */
    const BATMITZVAH = "http://gedcomx.org/BatMitzvah";

    /**
     *  A fact of a person's birth.
     */
    const BIRTH = "http://gedcomx.org/Birth";

    /**
     *  A fact of an official blessing received by a person, such as at the hands of a clergy member or at another religious rite.
     */
    const BLESSING = "http://gedcomx.org/Blessing";

    /**
     *  A fact of the burial of person's body after death.
     */
    const BURIAL = "http://gedcomx.org/Burial";

    /**
     *  A fact of a person's caste.
     */
    const CASTE = "http://gedcomx.org/Caste";

    /**
     *  A fact of a person's participation in a census.
     */
    const CENSUS = "http://gedcomx.org/Census";

    /**
     *  A fact of a person's christening *at birth*. Note: use `AdultChristening` for the christening as an adult.
     */
    const CHRISTENING = "http://gedcomx.org/Christening";

    /**
     *  A fact of a person's circumcision.
     */
    const CIRCUMCISION = "http://gedcomx.org/Circumcision";

    /**
     *  A fact of a person's clan.
     */
    const CLAN = "http://gedcomx.org/Clan";

    /**
     *  A fact of a person's confirmation (or other rite of initiation) in a church or religion.
     */
    const CONFIRMATION = "http://gedcomx.org/Confirmation";

    /**
     *  A fact of the cremation of person's body after death.
     */
    const CREMATION = "http://gedcomx.org/Cremation";

    /**
     *  A fact of the death of a person.
     */
    const DEATH = "http://gedcomx.org/Death";

    /**
     *  A fact of an education of a person.
     */
    const EDUCATION = "http://gedcomx.org/Education";

    /**
     *  A fact of a person's enrollment in an educational program or institution.
     */
    const EDUCATIONENROLLMENT = "http://gedcomx.org/EducationEnrollment";

    /**
     *  A fact of the emigration of a person.
     */
    const EMIGRATION = "http://gedcomx.org/Emigration";

    /**
     *  A fact of a person's ethnicity or race.
     */
    const ETHNICITY = "http://gedcomx.org/Ethnicity";

    /**
     *  A fact of a person's excommunication from a church.
     */
    const EXCOMMUNICATION = "http://gedcomx.org/Excommunication";

    /**
     *  A fact of a person's first communion in a church.
     */
    const FIRSTCOMMUNION = "http://gedcomx.org/FirstCommunion";

    /**
     *  A fact of a person's funeral.
     */
    const FUNERAL = "http://gedcomx.org/Funeral";

    /**
     *  A fact of a person's gender change.
     */
    const GENDERCHANGE = "http://gedcomx.org/GenderChange";

    /**
     *  A fact of a person's graduation from a scholastic institution.
     */
    const GRADUATION = "http://gedcomx.org/Graduation";

    /**
     *  A fact of a person's immigration.
     */
    const IMMIGRATION = "http://gedcomx.org/Immigration";

    /**
     *  A fact of a person's imprisonment.
     */
    const IMPRISONMENT = "http://gedcomx.org/Imprisonment";

    /**
     *  A fact of a land transaction enacted by a person.
     */
    const LANDTRANSACTION = "http://gedcomx.org/LandTransaction";

    /**
     *  A fact of a language spoken by a person.
     */
    const LANGUAGE = "http://gedcomx.org/Language";

    /**
     *  A fact of a record of a person's living for a specific period. This is designed to include &quot;flourish&quot;, defined to mean the time period
    *  in an adult's life where he was most productive, perhaps as a writer or member of the state assembly. It does not reflect the person's birth and death dates.
     */
    const LIVING = "http://gedcomx.org/Living";

    /**
     *  A fact of a person's marital status.
     */
    const MARITALSTATUS = "http://gedcomx.org/MaritalStatus";

    /**
     *  A fact of a person's medical record, such as for an illness or hospital stay.
     */
    const MEDICAL = "http://gedcomx.org/Medical";

    /**
     *  A fact of a person's military award.
     */
    const MILITARYAWARD = "http://gedcomx.org/MilitaryAward";

    /**
     *  A fact of a person's military discharge.
     */
    const MILITARYDISCHARGE = "http://gedcomx.org/MilitaryDischarge";

    /**
     *  A fact of a person's registration for a military draft.
     */
    const MILITARYDRAFTREGISTRATION = "http://gedcomx.org/MilitaryDraftRegistration";

    /**
     *  A fact of a person's military induction.
     */
    const MILITARYINDUCTION = "http://gedcomx.org/MilitaryInduction";

    /**
     *  A fact of a person's militray service.
     */
    const MILITARYSERVICE = "http://gedcomx.org/MilitaryService";

    /**
     *  A fact of a person's church mission.
     */
    const MISSION = "http://gedcomx.org/Mission";

    /**
     *  A fact of a person's move (i.e. change of residence) from a location.
     */
    const MOVEFROM = "http://gedcomx.org/MoveFrom";

    /**
     *  A fact of a person's move (i.e. change of residence) to a new location.
     */
    const MOVETO = "http://gedcomx.org/MoveTo";

    /**
     *  A fact that a person was born as part of a multiple birth (e.g. twin, triplet, etc.)
     */
    const MULTIPLEBIRTH = "http://gedcomx.org/MultipleBirth";

    /**
     *  A fact of a person's national id (e.g. social security number).
     */
    const NATIONALID = "http://gedcomx.org/NationalId";

    /**
     *  A fact of a person's nationality.
     */
    const NATIONALITY = "http://gedcomx.org/Nationality";

    /**
     *  A fact of a person's naturalization (i.e. acquisition of citizenship and nationality).
     */
    const NATURALIZATION = "http://gedcomx.org/Naturalization";

    /**
     *  A fact of a person's number of marriages.
     */
    const NUMBEROFMARRIAGES = "http://gedcomx.org/NumberOfMarriages";

    /**
     *  A fact of a person's occupation or employment.
     */
    const OCCUPATION = "http://gedcomx.org/Occupation";

    /**
     *  A fact of a person's ordination to a stewardship in a church.
     */
    const ORDINATION = "http://gedcomx.org/Ordination";

    /**
     *  A fact of a person's legal pardon.
     */
    const PARDON = "http://gedcomx.org/Pardon";

    /**
     *  A fact of a person's physical description.
     */
    const PHYSICALDESCRIPTION = "http://gedcomx.org/PhysicalDescription";

    /**
     *  A fact of a receipt of probate of a person's property.
     */
    const PROBATE = "http://gedcomx.org/Probate";

    /**
     *  A fact of a person's property or possessions.
     */
    const PROPERTY = "http://gedcomx.org/Property";

    /**
     *  A fact of a person's religion.
     */
    const RELIGION = "http://gedcomx.org/Religion";

    /**
     *  A fact of a person's residence.
     */
    const RESIDENCE = "http://gedcomx.org/Residence";

    /**
     *  A fact of a person's retirement.
     */
    const RETIREMENT = "http://gedcomx.org/Retirement";

    /**
     *  A fact of a person's stillbirth.
     */
    const STILLBIRTH = "http://gedcomx.org/Stillbirth";

    /**
     *  A fact of a person's tax assessment.
     */
    const TAXASSESSMENT = "http://gedcomx.org/TaxAssessment";

    /**
     *  A fact of a person's will.
     */
    const WILL = "http://gedcomx.org/Will";

    /**
     *  A fact of a person's visit to a place different from the person's residence.
     */
    const VISIT = "http://gedcomx.org/Visit";

    /**
     *  A fact of a person's _yahrzeit_ date.  A person's yahzeit is the anniversary of their death as measured by the Hebrew calendar.
     */
    const YAHRZEIT = "http://gedcomx.org/Yahrzeit";

    /**
     *  The fact of an annulment of a marriage.
     */
    const ANNULMENT = "http://gedcomx.org/Annulment";

    /**
     *  The fact of a marriage by common law.
     */
    const COMMONLAWMARRIAGE = "http://gedcomx.org/CommonLawMarriage";

    /**
     *  The fact of a civil union.
     */
    const CIVILUNION = "http://gedcomx.org/CivilUnion";

    /**
     *  The fact of a divorce of a couple.
     */
    const DIVORCE = "http://gedcomx.org/Divorce";

    /**
     *  The fact of a filing for divorce.
     */
    const DIVORCEFILING = "http://gedcomx.org/DivorceFiling";

    /**
     *  The fact of a domestic partnership.
     */
    const DOMESTICPARTNERSHIP = "http://gedcomx.org/DomesticPartnership";

    /**
     *  The fact of an engagement to be married.
     */
    const ENGAGEMENT = "http://gedcomx.org/Engagement";

    /**
     *  The fact of a marriage.
     */
    const MARRIAGE = "http://gedcomx.org/Marriage";

    /**
     *  The fact of a marriage banns.
     */
    const MARRIAGEBANNS = "http://gedcomx.org/MarriageBanns";

    /**
     *  The fact of a marriage contract.
     */
    const MARRIAGECONTRACT = "http://gedcomx.org/MarriageContract";

    /**
     *  The fact of a marriage license.
     */
    const MARRIAGELICENSE = "http://gedcomx.org/MarriageLicense";

    /**
     *  The fact of a marriage notice.
     */
    const MARRIAGENOTICE = "http://gedcomx.org/MarriageNotice";

    /**
     *  A fact of the number of children of a person or relationship.
     */
    const NUMBEROFCHILDREN = "http://gedcomx.org/NumberOfChildren";

    /**
     *  A fact of a couple's separation.
     */
    const SEPARATION = "http://gedcomx.org/Separation";

    /**
     *  A fact about an adoptive relationship between a parent an a child.
     */
    const ADOPTIVEPARENT = "http://gedcomx.org/AdoptiveParent";

    /**
     *  A fact the biological relationship between a parent and a child.
     */
    const BIOLOGICALPARENT = "http://gedcomx.org/BiologicalParent";

    /**
     *  A fact about a foster relationship between a foster parent and a child.
     */
    const FOSTERPARENT = "http://gedcomx.org/FosterParent";

    /**
     *  A fact about a legal guardianship between a parent and a child.
     */
    const GUARDIANPARENT = "http://gedcomx.org/GuardianParent";

    /**
     *  A fact about the step relationship between a parent and a child.
     */
    const STEPPARENT = "http://gedcomx.org/StepParent";

    /**
     *  A fact about a sociological relationship between a parent and a child, but not definable in typical legal or biological terms.
     */
    const SOCIOLOGICALPARENT = "http://gedcomx.org/SociologicalParent";

    private $birthLikeFactTypes = array(BAPTISM, BIRTH, CHRISTENING, BLESSING, CIRCUMCISION, ADOPTION);
    private $deathLikeFactTypes = array(DEATH, BURIAL, CREMATION, FUNERAL, PROBATE, WILL);
    private $marriageLikeFactTypes = array(MARRIAGE, ENGAGEMENT, MARRIAGEBANNS, MARRIAGECONTRACT, MARRIAGELICENSE, MARRIAGENOTICE);
    private $divorceLikeFactTypes = array(DIVORCE, DIVORCEFILING, ANNULMENT, SEPARATION);
    private $migrationlikeFactTypes = array(IMMIGRATION, EMIGRATION, NATURALIZATION, MOVETO, MOVEFROM);
    private $personFactTypes = array(
        ADOPTION, ADULTCHRISTENING, AMNESTY, APPRENTICESHIP, BAPTISM, BARMITZVAH, BATMITZVAH, BIRTH, BLESSING, BURIAL,
        CASTE, CENSUS, CHRISTENING, CIRCUMCISION, CLAN, CONFIRMATION, CREMATION, DEATH, EMIGRATION, ETHNICITY,
        EXCOMMUNICATION, FIRSTCOMMUNION, LIVING, FUNERAL, EDUCATION, IMMIGRATION, IMPRISONMENT, LANDTRANSACTION,
        MARITALSTATUS, MEDICAL, MILITARYAWARD, MILITARYDISCHARGE, MILITARYSERVICE, MISSION, MOVETO, MOVEFROM,
        NATURALIZATION, NUMBEROFMARRIAGES, NATIONALID, NATIONALITY, OCCUPATION, ORDINATION, PHYSICALDESCRIPTION,
        PROBATE, PROPERTY, RELIGION, RESIDENCE, RETIREMENT, STILLBIRTH, MULTIPLEBIRTH, WILL, VISIT
    );
    private $coupleFactTypes = array(
        ANNULMENT, COMMONLAWMARRIAGE, DIVORCE, DIVORCEFILING, ENGAGEMENT, MARRIAGE, MARRIAGEBANNS, MARRIAGECONTRACT,
        MARRIAGELICENSE, MARRIAGENOTICE, NUMBEROFCHILDREN, SEPARATION
    );
    private $parentChildFactTypes = array(
        BIOLOGICALPARENT, ADOPTIVEPARENT, STEPPARENT, FOSTERPARENT, GUARDIANPARENT, SOCIOLOGICALPARENT
    );

    /**
     * @param string $type FactType constant
     *
     * @return bool
     */
    public function appliesToBirth($type)
    {
        return in_array($type, $this->birthLikeFactTypes);
    }

    /**
     * @param string $type FactType constant
     *
     * @return bool
     */
    public function appliesToDeath($type)
    {
        return in_array($type, $this->deathLikeFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToMarriage($type)
    {
        return in_array($type, $this->marriageLikeFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToDivorce($type)
    {
        return in_array($type, $this->divorceLikeFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToMigration($type)
    {
        return in_array($type, $this->migrationlikeFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToPerson($type)
    {
        return in_array($type, $this->personFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToCouples($type)
    {
        return in_array($type, $this->coupleFactTypes);
    }

    /**
     * @param string $type FactType constant
     * @return bool
     */
    public function appliesToParentChild($type)
    {
        return in_array($type, $this->parentChildFactTypes);
    }

}
