<?php

namespace App\Entity;

use App\Entity\Embeddable\EVs;
use App\Entity\Embeddable\IVs;
use App\Entity\Embeddable\Moveset;
use App\Enum\NatureEnum;
use App\Enum\GenderEnum;
use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $pokemonId = null;

    #[ORM\Column(length: 32, nullable: true)]
    private ?string $nickname = null;

    #[ORM\Column]
    #[Assert\Range(min: 1, max: 100)]
    private ?int $level = null;

    #[ORM\Column]
    #[Assert\Range(min: 0, max: 255)]
    private ?int $happiness = null;

    #[ORM\Column]
    private ?bool $isShiny = null;

    #[ORM\Column(type: 'string', enumType: GenderEnum::class)]
    private GenderEnum $gender;

    #[ORM\Column(length: 32)]
    private ?string $ability = null;

    #[ORM\Column(type: 'string', enumType: NatureEnum::class)]
    private NatureEnum $nature;

    #[ORM\Column(length: 64)]
    private ?string $heldItem = null;

    #[ORM\Embedded(class: Moveset::class)]
    private Moveset $moveset;

    #[ORM\Embedded(class: IVs::class)]
    private IVs $IVs;

    #[ORM\Embedded(class: EVs::class)]
    private EVs $EVs;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'favoritePokemons')]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->moveset = new Moveset();
        $this->IVs = new IVs();
        $this->EVs = new EVs();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemonId(): ?int
    {
        return $this->pokemonId;
    }

    public function setPokemonId(int $pokemonId): static
    {
        $this->pokemonId = $pokemonId;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): static
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getIsShiny(): ?bool
    {
        return $this->isShiny;
    }

    public function setIsShiny(?bool $isShiny): static
    {
        $this->isShiny = $isShiny;

        return $this;
    }

    public function getGender(): GenderEnum
    {
        return $this->gender;
    }

    public function setGender(GenderEnum $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAbility(): ?string
    {
        return $this->ability;
    }

    public function setAbility(string $ability): static
    {
        $this->ability = $ability;

        return $this;
    }

    public function getNature(): NatureEnum
    {
        return $this->nature;
    }

    public function setNature(NatureEnum $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function getHeldItem(): ?string
    {
        return $this->heldItem;
    }

    public function setHeldItem(?string $heldItem): static
    {
        $this->heldItem = $heldItem;

        return $this;
    }

    public function getMoveset(): Moveset
    {
        return $this->moveset;
    }

    public function setMoveset(Moveset $moveset): static
    {
        $this->moveset = $moveset;

        return $this;
    }

    public function getIVs(): IVs
    {
        return $this->IVs;
    }

    public function setIVs(IVs $IVs): static
    {
        $this->IVs = $IVs;

        return $this;
    }

    public function getEVs(): EVs
    {
        return $this->EVs;
    }

    public function setEVs(EVs $EVs): static
    {
        $this->EVs = $EVs;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addFavoritePokemon($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeFavoritePokemon($this);
        }

        return $this;
    }

    public function getHappiness(): ?int
    {
        return $this->happiness;
    }

    public function setHappiness(?int $happiness): static
    {
        $this->happiness = $happiness;

        return $this;
    }


}
